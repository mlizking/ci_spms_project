<style>
.centered-and-cropped { 
    object-fit: cover 
}
.img-container{
  position:relative;
  display:inline-block;
}
.img-container .overlay{
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background:rgb(0,0,0);
  opacity:0;
  transition:opacity 500ms ease-in-out;
}
.img-container:hover .overlay{
  opacity:0.5;
}
.overlay span{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  color:#fff;
}
.overlay h3{
  position:absolute;
  bottom:0%;
  right:5%;
  /* transform:translate(-0%,-0%); */
}
.img-container .delete{
  position: absolute;
  bottom: 10%;
  right: 10%;
  color: #D84343;
  z-index: 1;
}
.img-container .edit{
  position: absolute;
  top: 10%;
  right: 10%;
  color: #ffffff;
  z-index: 1;
}
.edit:hover{
  color:#FFC300;
}
.img-container .like1{
  position: absolute;
  top: 10%;
  left: 10%;
  color: #ffffff;
  z-index: 1;
}
.like1:hover{
  color:#D84343;
}
.img-container .like2{
  position: absolute;
  top: 10%;
  left: 10%;
  color: #D84343;
  z-index: 1;
}
.img-container .like3{
  position: absolute;
  top:90%;
  left:50%;
  transform:translate(-50%,-50%);
  color: #ffffff;
  z-index: 1;
}
.like3:hover{
  color:#D84343;
}
.img-container .like4{
  position: absolute;
  top:90%;
  left:50%;
  transform:translate(-50%,-50%);
  color: #D84343;
  z-index: 1;
}
</style>

    
    
    