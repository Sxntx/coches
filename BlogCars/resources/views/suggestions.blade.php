@include('header')
<script>
$('a[id=hd]').removeAttr('hidden');
</script>

<div class="container mt-3">
  <div class="row">
    <div class="col-12 h1  d-flex  justify-content-center">
      Send us your suggestion
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-12 text-center">
      <form class="" action="{{url('savesuggestion')}}" method="get">
        <div class="form-group">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <input type="text" name="fname" placeholder="First Name" class="form-control border border-dark">
            </div>
            <div class="col-md-12 col-sm-12 mt-3">
              <input type="text" name="lname" placeholder="Last Name" class="form-control border border-dark">
            </div>
          </div>
        </div>
          <textarea type=""  name="sugerencia" rows="5" cols="40" placeholder="I want let you know about..." class="border border-dark rounded"></textarea>
          <br><input type="submit" class="btn btn-success mt-3" value="Send">
      </form>
    </div>
  </div>
</div>
<div class="container mt-5">
  <div class="row">
    <div class="col-12 h3 text-center">
      Find us here
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center">
    <iframe allowfullscreen=""
              aria-hidden="false"
              class="map" frameborder="1" height="auto" src="https://maps.google.com/maps?hl=es&amp;q=Histenstrasse+(class)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" tabindex="0"
              width="80%"></iframe>
    </div>
  </div>

</div>
@include('footer')
