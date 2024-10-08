<footer class="">
    <div class="pt-3 pb-2 bg-f5f5f5">
        <h1 class="fs-5 text-center">Bid on over 65,000 special objects every week, selected by 240+ experts</h1>
    </div>
    <div class="row bg-000022">
        <div class="col-md-3 col-sm-6">
            <img src="./images/header/logo.png" class="img-fluid mt-1 mb-5" />
            <i class="bi text-white bisize ms-5 me-3 bi-facebook"></i>
            <i class="bi text-white bisize m-3 bi-instagram"></i>
            <i class="bi text-white bisize m-3 bi-threads"></i>
            <i class="bi text-white bisize m-3 bi-tiktok"></i>
        </div>
        <div class="col-md-3 col-sm-6">
            <ul>
                <li class="list-group-item">
                    <p class="fs-3 mt-4"> Legal Information:</p>
                </li>
                <li class="list-group-item">
                    <p class="fs-6">Terms of Service</p>
                </li>
                <li class="list-group-item">
                    <p class="fs-6">Privacy Policy</p>
                </li>
                <li class="list-group-item">
                    <p class="fs-6">Cookie Policy</p>
                </li>
                <li class="list-group-item">
                    <p class="fs-6">Copyright Information</p>
                </li>
            </ul>
        </div>
        <div class="col-md-3 col-sm-6">
            <ul>
                <li class="list-group-item">
                    <p class="fs-3 mt-4">About Bidspirit</p>
                </li>
                <li class="list-group-item">
                    <p class="fs-6"><i class="bi bi-house-door fs-5 me-2"></i> 65 Nguyen Hy Quang - Ha Noi</p>
                </li>
                <li class="list-group-item">
                    <p class="fs-6"><i class="bi bi-telephone fs-5 me-2"></i> 0241133119</p>
                </li>
                <li class="list-group-item">
                    <p class="fs-6"><i class="bi bi-envelope fs-5 me-2"></i> bidspirit@gmail.com</p>
                </li>
            </ul>
        </div>
        <div class="col-md-3 col-sm-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d886.9841829493472!2d105.82560048636822!3d21.019552770947882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab784c389a67%3A0xf9f0ec80bba47839!2zNjUgUC4gTmd1eeG7hW4gSHkgUXVhbmcsIENo4bujIEThu6thLCDEkOG7kW5nIMSQYSwgSMOgIE7hu5lpIDEwMDAwMCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1728099906208!5m2!1sen!2s"
                class="img-fluid mt-5" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- <div class="row copyright bg-000022">
        <hr />
        <div class="col">
            <p class="fs-5 text-center">Copyright 2024 <i class="bi bi-c-circle"></i><strong class="mx-2"> Group 1 FPT
                    APTECH HaNoi</strong></p>
        </div>
    </div> -->
    <div class="row bg-000022">
        <div class="col">
            <p id="current-time" class="fs-5 text-center text-white"></p>
        </div>
    </div>
</footer>

<script>
    function updateTime(timezone) {
        const options = { timeZone: timezone, hour: '2-digit', minute: '2-digit', second: '2-digit' };
        const formatter = new Intl.DateTimeFormat([], options);
        document.getElementById('current-time').innerHTML = `Current Time (${timezone}): ${formatter.format(new Date())}`;
    }

    function getUserLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(success, error);
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }

    function success(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;

        // Sử dụng API để lấy múi giờ dựa trên tọa độ
        fetch(`https://api.bigdatacloud.net/data/timezone-by-location?latitude=${latitude}&longitude=${longitude}&key=YOUR_API_KEY`)
            .then(response => response.json())
            .then(data => {
                const timezone = data.timezone || 'Asia/Bangkok';  // Nếu không tìm được múi giờ thì mặc định là GMT+7
                updateTime(timezone);
                setInterval(() => updateTime(timezone), 1000); // Cập nhật mỗi giây
            })
            .catch(() => {
                updateTime('Asia/Bangkok'); // Nếu không gọi được API thì dùng GMT+7 mặc định
            });
    }

    function error() {
        alert("Unable to retrieve your location. Defaulting to GMT+7.");
        updateTime('Asia/Bangkok'); // Nếu lỗi thì đặt mặc định múi giờ GMT+7
        setInterval(() => updateTime('Asia/Bangkok'), 1000);
    }

    // Gọi hàm để lấy vị trí và cập nhật thời gian
    getUserLocation();
</script>
</footer>

</html>