<div class="container section-marginTop text-center">
    <h1 class="section-title">Our Services</h1>
    <h1 class="section-subtitle">Our Project Based Services</h1>
    <div class="row">

    @foreach($ServicesData as $ServicesData)

        <div class="col-md-3 p-2 ">
            <div class="card service-card text-center w-100">
                <div class="card-body">
                    <img class="service-card-logo " src="{{$ServicesData->service_img}}" alt="Card image cap">
                    <h5 class="service-card-title mt-3">{{$ServicesData->service_name}}</h5>
                    <h6 class="service-card-subTitle p-0 m-0">{{$ServicesData->service_des}}</h6>
                </div>
            </div>
        </div>

        @endforeach
