@extends('backend.layout.app')

 @section('content')
 <div class="pagetitle">
    <h1>Add User</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User</h5>

                    <form action=" {{ url('admin/user/add')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}

                        <!-- Hidden field for is_role -->
                        <input type="hidden" name="is_role" value="1">

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Full Names<span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Email <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Password <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Confirm Password <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="password" name="c_password" class="form-control" required>
                            </div>
                        </div>
                       
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label"> 
                            </label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</section>






 @endsection