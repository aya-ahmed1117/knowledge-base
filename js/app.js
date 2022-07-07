

/**
 * 
 * Manipulating the DOM exercise.
 * Exercise programmatically builds navigation,
 * scrolls to anchors from navigation,
 * and highlights section in viewport upon scrolling.
 * 
 * Dependencies: None
 * 
 * JS Version: ES2015/ES6
 * 
 * JS Standard: ESlint
 * 
*/

///////////////////
// Scroll to section on link click
const upButton = document.getElementById("UpBtn");


   document.onscroll = function() {
	scrollFunction()
};
// When scrolls down 40 from the top of the document, show the button

function scrollFunction() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    upButton.style.display = "block";
  } else {
    upButton.style.display = "none";
  }
  

  activeSection(document.documentElement.scrollTop);
}

// When clicks on the button, scroll to the top of the page
function topFunction() {
  document.body.scrollTop = 10;
  document.documentElement.scrollTop = 5;
}





// end of scroll
// note i put the scroll code in the top because if there any error in the js codes the scroll will always work

/**
 * Define Global Variables
 * 
*/
/*
    const section = new section ;
    const navBar = new navBar ;
*/
const	allSection = document.querySelectorAll('section');

const	navbarList = document.getElementById('navbar__list');
 const navList = document.querySelector('#navbar__list');

/**
 * End Global Variables
 * Start Helper Functions
 * 
*/

 const newBsection = document.getElementById("new-section");
 const main = document.getElementById("main");

/**
 * End Helper Functions
 * Begin Main Functions
 * 
*/

// build the nav


 //create document fragment
const fragment = document.createDocumentFragment(); 

 // need to reacth this (<ul><li><a>Section 1</ul></li></a>)

document.querySelectorAll('section').forEach((item, num) => {
	 const aelement = document.createElement("a"); // create <a></a>
 // Create a list item
  const li = document.createElement("li");// create <li></li>
  // 
  let textLink = item.getAttribute('data-nav');
    const textNode = document.createTextNode('section');


  aelement.textContent = textLink;
  aelement.classList.add("menu__link"); // from css sheet
li.addEventListener('click', ()=> { 
//li.classList.add("active-link");
   item.scrollIntoView({behavior: "smooth"})
   //scrollToAnchor(item)
   //activeLink(li)
   //li.style.backgroundColor = item.style.backgroundColor;
   activelink(li)
})
    aelement.setAttribute("id", `menu-${num + 1}`); 
	li.setAttribute("data-nav",item.getAttribute('id'));
      // Append the li to the list item
  li.appendChild(aelement);
  // Append the list item to the list
  navbarList.appendChild(li);
});

  document.body.appendChild(fragment);



// Add class 'active' to section when near top of viewport
function activeSection(currentScroll)
{
	//console.log(currentScroll);
	
 const sections = document.querySelectorAll('section');

  sections.forEach((sec) => {

const offsetbottom = sec.offsetTop + sec.offsetHeight -100  
if(sec.offsetTop - 100 <= currentScroll && offsetbottom >= currentScroll )
{
	
	//console.log(sec.getAttribute('id') , currentScroll , sec.offsetTop ,offsetbottom);
	
	//document.getElementsByTagName("")
	 const link = document.querySelectorAll('li');

  link.forEach((link) => {
		if(link.getAttribute('data-nav') == sec.getAttribute('id') )
		{
			link.classList.add('active-link');
		}
		else
		{
			link.classList.remove('active-link');
		}
	})
	//
	//console.log(sec);
	sec.classList.add("your-active-class")

}
else{
	sec.classList.remove("your-active-class")
}	
	  
 
});	
}


function activelink(Li)
{
	
 const link = document.querySelectorAll('li');

  link.forEach((link) => {
	
	//const textLink = element.getAttribute('data-nav');

  		
  link.classList.remove('active-link');
 
});
 Li.classList.add('active-link');
 
 const sectionId  = Li.getAttribute('data-nav');
 const activeSection = document.getElementById(sectionId);
 const activeSectionOffset = activeSection.offsetTop ;
 window.scrollTo(0, activeSectionOffset);
 
}

function activeLinkold(active){

console.log('activelink')

	 window.addEventListener('scroll',function(){
  
const	allSection = document.querySelectorAll('section');

	 	allSection.forEach((section) => {
	 		 let rect = section.getBoundingClientRect();

//> window.innerHeight
  if (rect.top >= 0 && rect.top <= 150 ){
  	document.querySelectorAll('allSection');
  	document.getElementsByClassName("your-active-class").classList.remove('your-active-class');

  	allSection.classList.add('your-active-class');
  	activeLink(section);
  }

	 	});

	 });

};



// Scroll to anchor ID using scrollTO event

function scrollToAnchor(navbar__list){
    const tag = $("#"+navbar__list+"");
    $('html,body').animate({scrollTop: tag.offset().top},'slow');
}
