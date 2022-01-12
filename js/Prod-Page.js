
class Food {
    constructor(name, image, price, rating, link, category) {
      this.name = name;
     
      this.price = price;
      this.rating = rating;
      this.link = link;
      this.category = category;
  
    }
  
  }
  
  
  //edit the link text 
  
  myProductsArray[0] = new Food("Burger", 58, 1, "./Food/Can-food/po/Canada_Burger.html", "Canada Food");
  myProductsArray[1] = new Food("Pizza",190, 2, "./Food/Can-food/po/Canada_Pizza.html", "Canada Food");
  myProductsArray[2] = new Food("Pasta", 114, 5, "./Food/Can-food/po/Canada_Pasta.html", "Canada Food");
  myProductsArray[3] = new Food("Hotpot",  160, 5, "./Food/Chinese-food/po/Chinese Seafood_Hotpot.html", "Chinese Food");
  myProductsArray[4] = new Food("Bibimbap", 250, 3, "./Food/Korean-food/po/Korean_Bibimbap.html", "Korean Food");
  myProductsArray[5] = new Food("Kimchi",  200, 3, "./Food/Korean-food/po/Korean_Kimchi.html", "Korean Food");
  myProductsArray[6] = new Food("Rice", 200, 5, "./Food/Taiwanese-food/po/Taiwanese_MincedPorkRice.html", "Taiwanese Food");
  myProductsArray[7] = new Food("Noodle", 85, 4, "./Food/Taiwanese-food/po/Taiwanese_PlainNoodles.html", "Taiwanese Food");
  myProductsArray[8] = new Food("Banh Can",  86, 2, "./Food/Viet-nam-food/po/Vietnamese_Banhcan.html", "Vietnamese Food");
  myProductsArray[9] = new Food("Com Tam", 70, 1, "./Food/Viet-nam-food/po/Vietnamese_Comtam.html", "Vietnamese Food");
  myProductsArray[10] = new Food("Boba Tea",  65, 4, "./Food/Drinks/po/Drinks_BobaTea.html", "Drinks");
  myProductsArray[11] = new Food("Banana Milk",  29, 4, "./Food/Drinks/po/Drinks_BananaMilkshake.html", "Drinks");
  
//making table using loop 
function loadInformation() {
    
      var tdText =
        '<div class="container">   <a href="' + item.link + '" ><img  class="img-food" src="' + item.image + '" class="image" > <div class="overlay"><div class="text">' + item.name + ' <br> Price: $' + item.price + ' <br> Rating: ' + item.rating + '/5 <br> Category: ' + item.category + ' </div></div></a></div>'
      cell.innerHTML = tdText;
    
    
  
  } 
  loadInformation(myProductsArray); // execute function 
  
