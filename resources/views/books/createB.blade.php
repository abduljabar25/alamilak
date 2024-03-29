@include('layouts.head')
@include('layouts.navbar')
@include('layouts.menu')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new book</div>

                <div class="card-body">

                    <form action="{{ route('/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        Title:
                        <br>
                        <input type="text" name="title" class="form-control">

                        <br>

                        Cover File:
                        <br>
                        <input type="file" name="cover">

                        <br><br>

                        <input type="submit" value=" Upload book " class="btn btn-primary">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
@include('layouts.footer-scrpt')
