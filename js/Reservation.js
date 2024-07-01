function enableButton(){
    if(document.getElementById("checkbox").checked){
        document.getElementById("Submit").disabled=false;
    }
    else{
        document.getElementById("Submit").disabled=true;

    }
    
}

function loadData(Route){

    var text;
    var text1;

    if(Route=="Route1"){

        text = "Route 1: River Wildlife Encounter <br><br> Duration: 2 hours"
        text1 = "Embark on a thrilling boat safari along the river, exploring the diverse ecosystems and encountering a wide range of wildlife. The route takes you through lush vegetation, passing by riverbanks teeming with life. Keep your eyes peeled for elephants, hippos, crocodiles, and an abundance of bird species. The experienced guides will provide informative commentary, sharing fascinating facts about the wildlife and their habitats. This route is perfect for those seeking a condensed wildlife experience within a limited time frame ";
    }
    else if(Route=="Route2"){

        text = "Route 2: Scenic River Cruise <br><br> Duration: 3 hours"
        text1 = "Indulge in the beauty of the river with a leisurely cruise through scenic landscapes. This route is designed to showcase the breathtaking natural surroundings, taking you past picturesque vistas and hidden gems along the riverbanks. Marvel at the towering trees, cascading waterfalls, and verdant vegetation. Along the way, you might spot various bird species, monkeys swinging through the trees, and perhaps even a grazing antelope or two. Sit back, relax, and enjoy the tranquility of the river as you soak in the stunning sights.";
    }
    else if(Route=="Route3"){

        text ="Route 3: Cultural Heritage Discovery <br><br>Duration: 4 hours";
        text1 = "Embark on a boat safari that not only explores the river's natural wonders but also delves into the cultural heritage of the area. The route takes you to historically significant sites along the river, where you can learn about the local communities and their traditions. Visit ancient temples, fishing villages, and cultural landmarks that offer insights into the rich history and heritage of the region. This route provides a unique blend of nature, culture, and history, allowing you to immerse yourself in the local way of life while enjoying the beauty of the river";
    }
    else if(Route=="Route4"){

        text = "Route 4: Sunset Serenade <br><br>Duration: 2.5 hours";
        text1 = "Experience the magic of a mesmerizing sunset on this romantic boat safari route. As the sun starts its descent, embark on a tranquil journey along the river, enjoying the warm hues of the sky reflecting on the water. The route is carefully curated to showcase the most scenic spots for capturing breathtaking sunset views. Watch as the landscape is bathed in golden light, listen to the sounds of nature harmonizing with the fading daylight, and savor the tranquility of the moment. This route is ideal for couples, honeymooners";
    }

    document.getElementById('topic').innerHTML = text;
    document.getElementById('para').innerHTML = text1;
    


}