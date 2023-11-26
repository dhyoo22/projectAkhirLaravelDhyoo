<header>
    <!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resepku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<style>
.custom-image{
  width: 100%;
  height: 75%;
}
</style>
                            <thead>
                            <div class="px-3 py-2 text-bg-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg sticky-top">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('/storage/images/logo.jpg/') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
               RESEPKU
            </a>
            <a href="{{ route('posts.create') }}"></a>
            <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <!-- Your navigation links can go here -->
            </ul>
        </nav>
    </div>
</div>


  
        
  <div class="container">
  <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('/storage/images/bg1.jpg/')}}" class="custom-image" alt="..">
    </div>
    <div class="carousel-item">
      <img src="{{asset('/storage/images/bg2.jpg/')}}" class="custom-image" alt="..">
    </div>
    <div class="carousel-item">
      <img src="{{asset('/storage/images/bg3.jpg/')}}" class="custom-image" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  
    
    <h3 class="mt-4"></h3>
    @forelse ($posts as $post)
    <div class="container overflow-hidden text-center">
    <div class="row gy-5">
        <!-- You can repeat this structure for multiple cards in a row -->
        <div class="container overflow-hidden text-center">
            <div class="card" style="max-width: 300px;">
                <img src="{{ asset('/storage/posts/'.$post->image) }}" class="card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Baca</a>
                </div>
            </div>
        </div>
        <!-- End of card structure -->
        
        <!-- You can repeat this structure for additional cards in the same row -->
        <div class="col-md-4">
            <div class="card" style="max-width: 300px;">
                <!-- Card content goes here -->
            </div>
        </div>
        <!-- End of card structure -->
    </div>
</div>


  @empty
  @endforelse
  </tbody>
  </table>
  {{ $posts->links() }}