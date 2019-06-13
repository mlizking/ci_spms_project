<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Hello !!</title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>
  
    <div class="card-columns">
  <div class="card">
    <img src="https://scontent.fbkk2-7.fna.fbcdn.net/v/t1.0-9/55664394_2213389492017781_5340764035547660288_n.jpg?_nc_cat=106&_nc_oc=AQmmt2vf5BZvUNuBiiQW37js5gJPgSS6DbDtLtIDzFc2huYDB0qkqj3MKLhp6s45BHA&_nc_ht=scontent.fbkk2-7.fna&oh=a9955666472bbbb0ffa3054ca470d982&oe=5D8108DA" class="img-fluid" alt="Responsive image">
    <div class="card-body">
      <h5 class="card-title">Card title that wraps to a new line</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
  <div class="card p-3">
    <blockquote class="blockquote mb-0 card-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <img src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t1.0-9/15338842_1227245017298905_2696136915757035698_n.jpg?_nc_cat=104&_nc_oc=AQmG7GoU99ByGWvwdGRf0nVCH5zd6E_4f2lhXIH-gCAZXqVgWJOVmKhh1tNGL46aERQ&_nc_ht=scontent.fbkk2-6.fna&oh=fed772af3678842efcb7e00eed539ac6&oe=5D9297DA" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card bg-primary text-white text-center p-3">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
      <footer class="blockquote-footer text-white">
        <small>
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="https://scontent.fbkk2-7.fna.fbcdn.net/v/t1.0-9/48397361_2068658376490894_5927557813445328896_n.jpg?_nc_cat=101&_nc_oc=AQmo7JMHoOaaNaPXl5hsfekECeiHY7K0bP2sO7fOkVGd1-_74YKoCfSe56rwfBIw5t8&_nc_ht=scontent.fbkk2-7.fna&oh=e1e12c9e77421eb4256e2fc9b420f83f&oe=5D8D1A56" class="card-img-top" alt="...">
  </div>
  <div class="card p-3 text-right">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>
<style>
    .card-columns {
  @include media-breakpoint-only(lg) {
    column-count: 4;
  }
  @include media-breakpoint-only(xl) {
    column-count: 5;
  }
}
</style>