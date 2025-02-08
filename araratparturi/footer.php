<footer>
      <div class="container">
        <p>code right to Ararat parturi 2024 &#169;</p>
        <p>build by Youssef</p>
      </div>
    </footer>
    <?php wp_footer(); ?>
    <script>
      const aList = document.querySelectorAll('[aria-current= "page"]')
      for(let i = 0 ; i < aList.length ; i++) {
        aList[i].addEventListener("click", activeList)
      }
      function activeList() {
        let navBar = document.getElementById("nav_bar_list");
        let shadow = document.getElementById("shadow");
        let Icon = document.getElementById("Icon");
        navBar.classList.toggle("active");
        shadow.classList.toggle("shadow-active");
        document.body.classList.toggle("noscroll");
        if (Icon.className === "fa-solid fa-bars")
          Icon.className = "fa-solid fa-xmark";
        else Icon.className = "fa-solid fa-bars";
      }
    </script>
  </body>
</html>