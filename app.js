const express = require("express");
const app = express();

app.get("/", (req,res)=>{
    res.send("Working");
})

app.listen(pricess.env.PORT || 3000)
module.exports = app
