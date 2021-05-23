const mongoose = require('mongoose');
// const Joi = require('joi');
// const { ObjectId } = require('bson');


var ObjectId = mongoose.Schema.ObjectId;

// Mongoose Schema

const NewsBlogSchema = new mongoose.Schema({
    blog_heading:{
        type:String,
        default:''
    },
    news_category:{
        type:String,
        default:''
    },
    blog_image:{
        type:String,
        default:''
    },
    blog_content:{
        type:String,
        default:''
    },
    author:{
        type:String,
        default:''
    },
    publish_timestamp:{
        type:Date,
        default:Date.now
    },
   
});



const news =  mongoose.model('news', NewsBlogSchema,'news_blog');
module.exports = news;






