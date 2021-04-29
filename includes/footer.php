
  <footer>
    <div class="container">
      <div class="row">
        <h2>Phan Quang Bảo Long 19BIT2</h2>
        <hr>
        <p>© 2021 ITEC</p>
      </div>
    </div>
    </div>

  </footer>
<script type="text/javascript">
  let hamburger = document.querySelector(".hamburger");
  let nav = document.querySelector("nav");
  let body = document.querySelector("body");
  let header = document.querySelector("header");
  hamburger.addEventListener("click", function(e) {
    e.preventDefault();
    nav.classList.toggle("slide");
    body.classList.toggle("slide-right");
    console.log("nav clicked");
  })

  window.addEventListener("scroll", function() {
    let scrollHeight = window.scrollY;
    if(scrollHeight >= 200) {
      header.classList.add("nav-trans");
    } else if (scrollHeight < 200) {
      header.classList.remove("nav-trans");
    }
  })


</script>
</body>
</html>
