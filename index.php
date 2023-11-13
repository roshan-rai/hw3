<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>

<?php
$pageTitle = "Home";
include "view-header.php";
?>
<div class="grid">
  <div class="item">Item 1</div>
  <div class="item">Item 2</div>
  <div class="item">Item 3</div>
  <!-- Add more items as needed -->
</div>
<h1>Homework 6</h1>
<?php
include "view-footer.php";
?>

<script>
  const grid = document.querySelector('.grid')
  const items = document.querySelectorAll('.item')

  items.forEach((item) => {
    item.addEventListener('mouseenter', () => {
      gsap.to(grid, {
        '--track': '2fr',
        duration: 0.3,
      })
      gsap.to(item, {
        '--innerTrack': '1fr',
        duration: 0.3,
      })
    })

    item.addEventListener('mouseleave', () => {
      gsap.to(grid, {
        '--track': '1fr',
        duration: 0.3,
      })
      gsap.to(item, {
        '--innerTrack': '0fr',
        duration: 0.3,
      })
    })
  })
</script>
