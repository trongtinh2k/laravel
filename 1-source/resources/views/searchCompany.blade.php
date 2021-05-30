<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Pricing example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->

</head>

<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">Lập trình backend-web 2</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/companies">Companies</a>
        <a class="p-2 text-dark" href="/trainers">Trainers</a>
        <a class="p-2 text-dark" href="/search">Search</a>

    </nav>

</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Companies</h1>

</div>

<form action='http://127.0.0.1:8000/searchCompanies' method='GET'>
                <h2>Search content in database using Laravel</h2>
                <div class="form-group">
                    <input type="text" name="search" placeholder="Search...!" class="form-control"/>
                    <input type="submit" class="btn btn-primary" value="Search"/>
                </div>
</form>

<div class="container">
<form action='http://127.0.0.1:8000/searchCompanies' method="GET">
            <input type="text" name="name" id="name">
            <button type="submit">Submit</button>
        </form>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Web</th>
                <th scope="col">Phone</th>
            </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
                <tr>
                    <th scope="row">{!! $company->company_id !!}</th>
                    <td>{!! $company->company_name !!}</td>
                    <td>{!! $company->company_web !!}</td>
                    <td>{!! $company->company_phone !!}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
        {!! $companies->render() !!}
    </div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                <small class="d-block mb-3 text-muted">© 2017-2018</small>
            </div>
            <div class="col-6 col-md">
                <h5>Companies</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">List of companies</a></li>





                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Trainers</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">List of trainers
                        </a></li>



                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>



                </ul>
            </div>
        </div>
    </footer>
</div>





</body></html>

