<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="./js/index.js"></script>
    <script src="./js/test.js"></script>
    <title>Home</title>
    <style>
        .row{
            background-color: black;
        }
        .col-md-7{
            background-color: red;
        }
        .col-md-5{
            background-color: green;
        }
    </style>
</head>

<body>
        <div class="container mt-5">
          <div class="row align-items-center mb-5">
            <Col md="6">
              <p className="fs-2">Download the <strong>TRAVELSMART</strong> app</p>
              <p className="fs-4 mt-2">and discover special object anytime, anywhere</p>
              <Row>
                <Col md="6">
                  <div><a href="/" tabIndex="0"><img className="img-fluid mt-3" src={Appstore} alt="appstore" /></a>
                  </div>
                </Col>
                <Col md="6">
                  <div><a href="/" tabIndex="0"><img className="img-fluid mt-3" src={CHPplay} alt="chplay"/></a></div>
                </Col>  
              </Row>
            </Col>
            <Col md="6">
              <img src={Footerapp} cl assName="img-fluid"></img>
            </Col>
          </divRow>
        </divContainer>
      </section>
</body>

</html>