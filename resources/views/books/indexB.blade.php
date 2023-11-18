@include('layouts.head')
@include('layouts.navbar')
@include('layouts.menu')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Books list</div>

                <div class="card-body">

                    <a href="{{ url('/createB') }}" class="btn btn-primary">Add new book</a>
                    <br /><br />

                    <table class="table">
                        <tbody>
                            <tr>
                                
                        
                        <tr>
                            <td colspan="3">لاتوجد نتائج بحــث</td>
                        </tr>
                        
                    
                            </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>






@include('layouts.footer')
@include('layouts.footer-scrpt')
