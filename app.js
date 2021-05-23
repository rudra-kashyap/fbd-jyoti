const express = require("express");
const app = express();

app.get("/", (req,res)=>{
    res.send("Working !, Demo Working");
})

app.listen(pricess.env.PORT || 5000)
module.exports = app