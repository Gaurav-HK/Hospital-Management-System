var myImage=document.getElementById("myPhoto");

var imageArray=["lp1.jpg","lp2.jpg","lp3.jpg","lp4.jpg"];

var imageIndex=0;

function changeImage(){
		myPhoto.setAttribute("src", imageArray [ imageIndex]);
		imageIndex++;
		if (imageIndex>=imageArray.length)
		{
			imageIndex=0;
		}
}

var intervalHandle = setInterval(changeImage,2500);

myPhoto.onclick=function(){
	clearInterval(intervalHandle);
}