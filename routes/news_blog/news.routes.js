const express = require('express');
const router = express.Router();
const multer = require('multer');
const news = require('../../controllers/news_blog.controller');

const storage = multer.diskStorage({
    destination: function(req,res,cb){
        cb(null,'./uploads/');
    },
    filename: function (req, file, cb){
        cb(null ,file.originalname);
    },
});
const fileFilter = (req,file,cb)=>{
    // reject a file
    if(file.mimetype === 'image/jpeg' || file.mimetype === 'image/png'){
        cb(null,true);
    }else{
        cb(new Error("incorrect file type"), false);
    }
    
    
};
const upload = multer({
    storage:storage,
    limits:{
    fileSize:1024*1024*10
    },
    fileFilter:fileFilter


}); 


// Route: Fetch single latest news
router.get('/fetch/latest-news/single',news.getLatestSingle);


// Route: Create a new News Blog Post
router.post('/create',upload.single('blog_image') ,news.create);

// Route: Fetch All news posts
router.get('/', news.find);

// Route: Find Specific Recruiter
router.get('/:id', news.find);

// Route: Update Specific Blog Post
router.patch('/update/:id', news.update);

// Route: Delete Specific Recruiter
router.delete('/delete/:id', news.delete);

// Route: Recruiter Login
// router.post('/login',recruiter.login);


// ----------- Routes: Filtered Fetch  -------------

// Route: Fetch News by category
router.get('/category/:category',news.getCategoryNews);

// Route: Fetch Latest News
router.get('/latest/blogs',news.getLatestNews);

// Route: Fetch Trending News
router.get('/trending/blogs',news.getTrendingNews);

// Route:Fetch Image, Headline and TimeStamp Only
router.get('/fetch/brief',news.getBriefNews);

module.exports = router;