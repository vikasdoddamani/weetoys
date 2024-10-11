<head>
    <style type="css/text">
    .contact_section {
    padding: 20px;
}

.heading_container {
    text-align: center;
    margin-bottom: 20px;
    color: white; /* Assuming the text is white */
}

.map_container {
    width: 100%;
}

.map-responsive {
    overflow: hidden;
    padding-top: 56.25%; /* 16:9 Aspect Ratio */
    position: relative;
}

.map-responsive iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0; /* Optional: Remove the border */
}

.form-group {
    margin-bottom: 15px;
}

input[type="text"], input[type="email"], .message-box {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.message-box {
    height: 100px; /* Specify height for the message box */
}

button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #007BFF; /* Change as needed */
    color: white;
    cursor: pointer;
    width: 100%; /* Full width for button */
}

button:hover {
    background-color: #0056b3; /* Darker shade on hover */
}

/* Responsive Styles */
@media (max-width: 768px) {
    .contact_section {
        padding: 10px;
    }

    .map-responsive {
        padding-top: 75%; /* Adjust aspect ratio for mobile */
    }

    .form-group {
        margin-bottom: 10px; /* Less margin on smaller screens */
    }

    button {
        width: 100%; /* Full width for button on mobile */
    }
}

    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<section class="contact_section">
    <div class="container">
        <div class="heading_container">
            <h2>
                <div>For Your Own customized gifts -> </div> Contact Us
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <div class="map_container">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7691.634333063114!2d74.99068998965811!3d15.440416282253604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb8d299fc2dbc0d%3A0xf0ce0e2ed5a3286d!2sKalyan%20Nagar%2C%20Dharwad%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1728297705800!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <form action="#">
                    <div class="form-group">
                        <input type="text" placeholder="Name" required />
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Phone" required />
                    </div>
                    <div class="form-group">
                        <textarea class="message-box" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit">SEND</button>
                </form>
            </div>
        </div>
    </div>
</section>
