<?php include 'cdn_css.php';?>
<?php include 'header.php';?>
<div class="full-screen-scroller">
  <div class="fss-dotted-scrollspy">
    <button type="button" class="fss-nav-btn fss-mainview-prev">
      <i class="fas fa-chevron-up"></i>
    </button>
    <a href="#view-1" class="fss-nav-item active"></a>
    <a href="#view-2" class="fss-nav-item"></a>
    <a href="#view-3" class="fss-nav-item"></a>
    <a href="#view-4" class="fss-nav-item"></a>
    <button type="button" class="fss-nav-btn fss-mainview-next">
      <i class="fas fa-chevron-down"></i>
    </button>
  </div>

  <div fss-anchor="view-1" class="fss-mainview fss-active">
    <div class="fss-subview">
      <div class="fss-dotted-scrollspy">
        <button type="button" class="fss-nav-btn fss-subview-prev">
          <i class="fas fa-chevron-left"></i>
        </button>
        <a href="#subview-a" class="fss-nav-item active"></a>
        <a href="#subview-b" class="fss-nav-item"></a>
        <a href="#subview-c" class="fss-nav-item"></a>
        <button type="button" class="fss-nav-btn fss-subview-next">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>
<!--info-->
      <div fss-anchor="subview-a" class="fss-subview-item subview-a">
        <div class="box">
          <div class="info">
            <p>View 1</p>
            <p>Subview A</p>
          </div>
        </div>
      </div>

      <div fss-anchor="subview-b" class="fss-subview-item subview-b fss-active">
        <div class="box">
          <div class="info">Subview B</div>
        </div>
      </div>

      <div fss-anchor="subview-c" class="fss-subview-item subview-c">
        <div class="box">
          <div class="info">Subview C</div>
        </div>
      </div>
    </div>
  </div>

  <div fss-anchor="view-2" class="fss-mainview view3">
    <div class="box">
      <div class="info">View 2</div>
    </div>
  </div>

  <div fss-anchor="view-3" class="fss-mainview">
    <div class="fss-subview">
      <div class="fss-dotted-scrollspy">
        <button type="button" class="fss-nav-btn fss-subview-prev">
          <i class="fas fa-chevron-left"></i>
        </button>
        <a href="#subview-d" class="fss-nav-item active"></a>
        <a href="#subview-e" class="fss-nav-item"></a>
        <button type="button" class="fss-nav-btn fss-subview-next">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>

      <div fss-anchor="subview-d" class="fss-subview-item subview-d">
        <div class="box">
          <div class="info">
            <p>View 3</p>
            <p>Subview D</p>
          </div>
        </div>
      </div>

      <div fss-anchor="subview-e" class="fss-subview-item subview-e">
        <div class="box">
          <div class="info">Subview E</div>
        </div>
      </div>
    </div>
  </div>

  <div fss-anchor="view-4" class="fss-mainview view5">
    <div class="box">
      <div class="info">View 4</div>
    </div>
  </div>
</div>
<!--Footer-->

<?php include 'footer.php';?>
    <?php include 'cdn_js.php';?>
<script>
    $(document).ready(function () {
  $(".full-screen-scroller").fullScreenScroller();
});
</script>