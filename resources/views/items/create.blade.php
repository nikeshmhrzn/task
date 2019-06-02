@extends('layouts.app')


@section('content')
<script>
    function showDiv() {
        document.getElementById('electronics').style.display = "block";
    }

    function showDivs() {
        document.getElementById('clothes').style.display = "block";
    }


</script>
    <div class="container">
        <form action="{{url('items')}}" method ="POST">
                  <h2>Create Product Form</h2>
                  @csrf

            <div class="form-group" style="font-size:18px;">
                <label class="control-label" for="name">Name</label>
            <input class="form-control" id="name" name="name" type="text"  required style="font-size:19px"/>
            </div>

            <div class="form-group" style="font-size:18px;">
                <label class="control-label requiredField" for="brand">Brand</label>
            <input class="form-control" id="brand" name="brand" type="text"  required  style="font-size:19px"/>
            </div>

            <div class="form-group" style="font-size:18px;">
                <label class="dropdown-toggle" data-toggle="dropdown">Category</label>
                    <ul class="dropdown-menu">
                        <input type="button" name="answer" value="Electronics" onclick="showDiv()" />
                        <input type="button" name="answer" value="clothes" onclick="showDivs()" />
                    </ul>

            </div>

            <div id="electronics"  style="display:none;" class="electronic">
                <div class="form-group" style="font-size:18px;">
                    <label class="control-label" for="ram">RAM</label>
                    <input class="form-control" id="ram" name="ram" type="text"  style="font-size:19px "/>
                </div>
                        <div class="form-group" style="font-size:18px;">
                            <label class="control-label" for="cpu">CPU</label>
                            <input class="form-control" id="cpu" name="cpu" type="text"  style="font-size:19px "/>
                        </div>

            </div>


            <div id="clothes"  style="display:none;">
                <div class="form-group" style="font-size:18px;">
                    <label class="control-label" for="Size">Size</label>
                <input class="form-control" id="size" name="size" type="text"  style="font-size:19px " />
                </div>
                <div class="form-group" style="font-size:18px;">
                    <label class="control-label" for="Color">Color</label>
                <input class="form-control" id="color" name="color" type="text"  style="font-size:19px " />
                </div>

            </div>


            <div class="form-group">
                <button class="btn btn-primary " name="save" type="submit" value="save">Save</button>
            </div>

        </form>


    </div>
@endsection
