<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.slide-container .prev,
.slide-container .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: all 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.slide-container .prev:hover,
.slide-container .next:hover {
  background-color: rgba(0, 0, 0, 0.8);
  color: white;
}

.slide-container .prev {
  left: 2px;
}

.slide-container .next {
  right: 2px;
}

.dots-container {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
}

.dots-container .dot {
  cursor: pointer;
  margin: 5px;
  width: 20px;
  height: 20px;
  color: #333;
  border-radius: 50%;
  background-color: #dfd6ce;
}

.dots-container .dot.active {
  border: 2px solid green;
}

* {
  padding: 0;
  border: 0;
  box-sizing: border-box;
}

body {
  height: 100%;
/*   background-image: linear-gradient(to top, #accbee 0%, #e7f0fd 100%); */
}

body h1 {
  text-align: center;
}

.slide-container {
  display: flex;
  justify-content: center;
  align-items: center;
  max-width: 1000px;
  margin: auto;
  position: relative;
}

.slide-container .slide {
  display: none;
  width: 100%;
}

.slide-container .slide.fade {
  animation: fade 0.5s cubic-bezier(0.55, 0.085, 0.68, 0.53) both;
}

.slide-container .slide img {
  width: 100%;
}
</style>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Image Slider</h1>
    <div class="slide-container">
      <div class="slide fade">
        <img src='https://images.unsplash.com/photo-1590595978583-3967cf17d2ea?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
      </div>
      <div class="slide fade">
        <img src='https://images.unsplash.com/photo-1588807308097-fb6e5047df8c?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
      </div>
      <div class="slide fade">
        <img src='https://images.unsplash.com/photo-1589808710416-24cf7ac026f2?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
      </div>
      <div class="slide fade">
        <img src='https://images.unsplash.com/photo-1588796388882-a4d533c47e5e?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
      </div>

      <a href="#" class="prev" title="Previous">&#10094</a>
      <a href="#" class="next" title="Next">&#10095</a>
    </div>
    <div class="dots-container">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>

<script>
let currentSlide = 0;
const slides = document.querySelectorAll(".slide")
const dots = document.querySelectorAll('.dot')

const init = (n) => {
  slides.forEach((slide, index) => {
    slide.style.display = "none"
    dots.forEach((dot, index) => {
      dot.classList.remove("active")
    })
  })
  slides[n].style.display = "block"
  dots[n].classList.add("active")
}
document.addEventListener("DOMContentLoaded", init(currentSlide))
const next = () => {
  currentSlide >= slides.length - 1 ? currentSlide = 0 : currentSlide++
  init(currentSlide)
}

const prev = () => {
  currentSlide <= 0 ? currentSlide = slides.length - 1 : currentSlide--
  init(currentSlide)
}

document.querySelector(".next").addEventListener('click', next)

document.querySelector(".prev").addEventListener('click', prev)


setInterval(() => {
  next()
}, 5000);

dots.forEach((dot, i) => {
  dot.addEventListener("click", () => {
    console.log(currentSlide)
    init(i)
    currentSlide = i
  })
})


</script>

</body>
</html> 

<link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" href="../css/owl.transitions.css">