{{ tml_begin_source("navigation") }}
<div class="navbar navbar-default navbar-static-top" role="navigation">

  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">
          {!! tr("Toggle navigation") !!}
        </span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <strong>Welp</strong>
      </a>
    </div>

    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="#">{!! tr("About Us") !!}</a></li>
        <li><a href="#">{!! tr("Search") !!}</a></li>
        <li><a href="#">{!! tr("Write a Review") !!}</a></li>
        <li><a href="#">{!! tr("Find Friends") !!}</a></li>
        <li><a href="#">{!! tr("Help") !!}</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li>
              <?php tml_language_selector_tag("bootstrap", ["element" => "li"]) ?>
          </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            {!! tr("More {carret}", ["carret" => "<b class='caret'></b>"])  !!}
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">{!! tr("Log in") !!}</a></li>
            <li><a href="#">{!! tr("Sign Up") !!}</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
{{ tml_finish_source() }}