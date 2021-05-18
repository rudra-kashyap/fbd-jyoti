const express = require('express');
const router = express.Router();
const mongoose  = require('mongoose');
const MONGO = require('mongodb').MongoClient;
const uri = process.env.MONGO_URI;
const multer = require('multer');
const request = require('request');
// Importing Models
const News = require('../models/newsblog.model');

// Image Upload code


// Create recruiter
exports.create = async(req,res)=>{
    console.log(req.file);
    // validate request
    if(!req.body){
        res.status(400).send({ message : "Content can not be emtpy!"});
        return;
    }



    // new Blog post
    const news_blog = new News({
        blog_heading:req.body.blog_heading,
        news_category:req.body.news_category,
        blog_content:req.body.blog_content,
        blog_image:req.file.path,
        publish_timestamp:req.body.publish_timestamp,
        author:req.body.author
    })

    // save user in the database
    try{
        const result = await News.create(news_blog);
        res.status(200).send(result);
    } catch(err){
        res.status(500).send({message:err.message});
    }

};

// Method: Fetch All or Specific Blog post
exports.find = async(req, res)=>{
    const id = req.params.id;

    try{
        if(id){
            const result = await News.findOne({_id:id});
            // var ip = req.headers['x-forwarded-for'] || req.socket.remoteAddress || null;
            // console.log(ip);

            const views = result.views
            const new_views = views + 1;

            console.log("views: ",views);
            News.findByIdAndUpdate(id,)
            News.findByIdAndUpdate(id, {views:new_views}, { useFindAndModify: false})
            .then(data => {
                if(!data){
                    res.status(404).send({ message : `Cannot Update post with ${id}.`})
                }else{
                    res.send("Blog updated Succesfully");
                }
            })
            .catch(err =>{
                res.status(500).send({ message : "Error Update user information"})
            })

            res.json(result);
        }else{
            const result = await News.find();
            res.json(result);
        }


    }

    catch(err){
        res.status(500).send({message:err.message || "Error occured while fetching data"})
    }



}

// Method: Update Specific Blog Post
exports.update = (req, res)=>{
    if(!req.body){
        return res
            .status(400)
            .send({ message : "Data to update cannot be empty"})
    }

    const id = req.params.id;
    News.findByIdAndUpdate(id, req.body, { useFindAndModify: false})
        .then(data => {
            if(!data){
                res.status(404).send({ message : `Cannot Update post with ${id}.`})
            }else{
                res.send("Blog updated Succesfully");
            }
        })
        .catch(err =>{
            res.status(500).send({ message : "Error Update user information"})
        })
}


// Method: Delete specific Blog Post
exports.delete = async(req,res)=>{
    // const base64String = req.headers.auth_token;
    // const dataString = base64String.split('.')[1];
    // const decoded = JSON.parse(base64.decode(dataString));

    const blog_id = req.params.id;


    try{
        // const user_id = decoded._id;
        const job = await News.findOneAndDelete({_id:blog_id});
        res.send("Blog deleted successfully!!");

    } catch(err){
        res.status(500).send({message:err.message});
    }
}



// -------------------- Filter Methods ------------------------

exports.getCategoryNews = async(req,res)=>{
    const category = req.params.category;
    var regex = new RegExp(["^", category, "$"].join(""), "i");
    try{
        const result = await News.find({news_category:{$in:regex}});
        res.send(result);
    } catch(err){
        res.status(500).send({message:err.message});
    }
}

// Method: Fetch Latest News
exports.getLatestNews = async(req,res)=>{

    try{

            const result = await News.find().sort({"publish_timestamp": -1});
            res.send(result);


    } catch(err){
        res.status(500).send({message:err.message});
    }
}

// Method: Fetch Trending Articles
exports.getTrendingNews = async(req,res)=>{

    try{

            const result = await News.find().sort({views: -1});
            res.send(result);


    } catch(err){
        res.status(500).send({message:err.message});
    }
}



// Method: Fetch All OR Specific Articles with Image, Heading, and Timestamp
exports.getBriefNews = async(req,res)=>{

    try{

            const result = await News.aggregate([{$project:{blog_heading:1,blog_image:1,publish_timestamp:1}}]);
            res.send(result);


    } catch(err){
        res.status(500).send({message:err.message});
    }
}

// Method: Fetch single latest news for Hero section
exports.getLatestSingle = async(req,res)=>{
  try{
    const result = await News.find().sort({"publish_timestamp":-1}).limit(1);
    res.send(result);

  } catch(err){
    res.status(500).send({message:err.message});
  }

}
