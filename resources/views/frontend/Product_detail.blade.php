@extends('frontend.layouts.main')
@section('main-container')

<main>
   
<body>
    <div class="product-page">
        <div class="breadcrumb">
            <a href="{{url('/')}}">Home</a> / <a href="{{url('/Shirts')}}">T-Shirt</a>
        </div>

        <div class="product-details">
            <div class="product-image">
                <img src="pictures/sample1.png" alt="Men's Fashion T-Shirt" id="mainImage">
                <div class="thumbnail-images">
                    <img src="pictures/sample2.png" alt="Blue T-Shirt" onclick="changeImage('pictures/sample2.png')">
                    <img src="pictures/g2.png" alt="White T-Shirt" onclick="changeImage('pictures/g2.png')">
                    <img src="pictures/g3.png" alt="Red T-Shirt" onclick="changeImage('pictures/g3.png')">
                    <img src="pictures/g4.png" alt="Green T-Shirt" onclick="changeImage('pictures/g4.png')">
                </div>
            </div>

            <div class="product-info">
                <h1>Fashion T-Shirts</h1>
                    
                <p class="price">RS:1200</p>

                <label for="size">Select Size</label>
                <select id="size">
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                </select>

                <div class="quantity">
                    <input type="number" value="1" min="1">
                    <button class="add-to-cart">Add to Cart</button>
                </div>

                <div class="product-description">
                    <h2>Product Details</h2>
                    <p>The Gildan Ultra Cotton T-shirt is made from a substantial 6.0 oz. per sq. yd. fabric constructed
                        from 100% cotton, this classic fit preshrunk jersey knit provides unmatched comfort with each
                        wear. Featuring a taped neck and shoulder, and a seamless double-needle collar, and available in
                        a range of colors, it offers it all in the ultimate head-turning package.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function changeImage(imageSrc) {
            document.getElementById('mainImage').src = imageSrc;
        }
    </script>

</body>

</main>

@endsection