
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Hub</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

.dropdown-btn.fee-btn {
    display: block;
    width: 442%; /* Adjust this value to increase or decrease the button length */
    padding: 10px;
    margin-bottom: 5px;
    background-color: #004d00;
    color: #fff;
    border: 1px solid #004d00;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

.dropdown-btn.fee-btn:hover {
    background-color: #003300;
    color: #fff;
}

.dropdown-content .fee-btn {
    display: block;
    width: 250%; /* Adjust this value to increase or decrease the button length */
    padding: 10px;
    margin-bottom: 5px;
    background-color:#e6ffe6;
    color: #004d00;
    border: 1px solid #004d00;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

.dropdown-content .fee-btn:hover {
    background-color: #003300;
    color: #fff;
}

    .college-item {
        border: 1px solid #ddd; /* Add border to create a box effect */
        padding: 10px;
        border-radius: 4px;
        background-color: #f9f9f9; /* Add background color */
    }



/* Style for filter buttons */
.sidebar button {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 5px;
    background-color: #004d00;
    color: #fff;
    border: 1px solid #004d00;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

.sidebar button:hover {
    background-color: #003300;
    color: #fff;
}

/* Style for cutoff input and apply button */
.sidebar input {
    padding: 8px;
    border: 1px solid #004d00;
    border-radius: 4px;
    margin-right: 5px;
}

.sidebar button.apply-btn {
    background-color: #004d00;
    color: #fff;
    border: 1px solid #004d00;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

.sidebar button.apply-btn:hover {
    background-color: #003300;
    color: #fff;
}



        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #004d00;
        }

        .nav-btn {
            color: #fff;
            background-color: #004d00;
            border: 1px solid #004d00;
            text-decoration: none;
            padding: 10px 15px;
            margin: 0 5px;
            border-radius: 4px;
            cursor: pointer;
        }

        .nav-btn:hover {
            background-color: #003300;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            z-index: 1;
            border-radius: 4px;
        }

        .dropdown-content a {
            color: #004d00;
            padding: 10px;
            display: block;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .dropdown-content a:hover {
            background-color: #e6ffe6;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .container {
            display: flex;
            margin: 20px;
        }

        .sidebar {
            flex: 1;
            padding: 20px;
            background-color: #e6ffe6;
        }

        .sidebar h2 {
            margin-top: 0;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .sidebar a {
            text-decoration: none;
            color: #004d00;
            transition: color 0.3s;
        }

        .sidebar a:hover {
            color: #003300;
        }

        .content {
            flex: 2;
            padding: 20px;
            background-color: #fff;
        }

        .college-item {
            margin-bottom: 10px;
        }

        .college-link {
            text-decoration: none;
            color: #004d00;
            font-weight: bold;
            transition: color 0.3s;
            cursor: pointer;
        }

        .college-link:hover {
            color: #003300;
        }

        .search-bar {
            display: flex;
            margin-top: 20px;
        }

        .search-input {
            padding: 8px;
            border: 1px solid #004d00;
            border-radius: 4px;
            margin-right: 5px;
        }

        .search-btn {
            background-color: #004d00;
            color: #fff;
            border: 1px solid #004d00;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-btn:hover {
            background-color: #003300;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
            padding-top: 60px;
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            background-color: #fefefe;
            padding: 20px;
            border-radius: 4px;
        }

        .modal img {
            width: 100%;
            height: auto;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .close {
            position: absolute;
            top: 15px;
            right: 20px;
            color: #004d00;
            font-size: 30px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
        }

        .close:hover {
            color: #003300;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <button class="nav-btn" onclick="window.location.href='Thome.html'">Home</button>
        <div class="dropdown">
            <button class="nav-btn">Colleges</button>
            <div class="dropdown-content">
                <a href="gov.html">Government Colleges in South Tamil Nadu</a>
                <a href="private.html">Private Colleges in South Tamil Nadu</a>
                <a href="jee.html">JEE Based Colleges in South Tamil Nadu</a>
            </div>
        </div>
        <button class="nav-btn" onclick="window.location.href='sru.html'">Filters</button>
        <button class="nav-btn" onclick="window.location.href='Thostell.html'">Hostel</button>
        <button class="nav-btn" onclick="window.location.href='Tlogin.html'">Log In</button>
        <div class="search-bar">
            <input type="text" class="search-input" placeholder="Search...">
            <button onclick="filterCollegesByCutoffFirstSet()" class="search-btn">Search</button>
        </div>
    </div>

    <div class="container">
        <div class="sidebar">
            <h2>Filter Options</h2>
            <ul>
<!-- Fee Range Option -->
<div class="dropdown">
    <button class="dropdown-btn fee-btn">Fee Range</button>
    <div class="dropdown-content">
        <button class="fee-btn" onclick="filterColleges('25k-50k')">25k-50k</button>
        <button class="fee-btn" onclick="filterColleges('50k-75k')">50k-75k</button>
        <button class="fee-btn" onclick="filterColleges('75k-1l')">75k-1l</button>
        <button class="fee-btn" onclick="filterColleges('1l-2l')">1l-2l</button>
        <button class="fee-btn" onclick="filterColleges('above2l')">Above 2l</button>
    </div>
</div>
        </li>

        <li><button onclick="filterColleges('infrastructure')">Infrastructure</button></li>
        <li><button onclick="filterColleges('placement')">Placement</button></li>
        <li><button onclick="filterColleges('sports')">Sports</button></li>
        <li><button onclick="filterColleges('culturals')">Culturals</button></li>
<li><button onclick="window.location.href='https://www.google.com/maps/search/engineering+college+in+madurai/@9.9241026,78.0888194,12z/data=!3m1!4b1?authuser=0&entry=ttu'">Location</button></li>
            </ul>

            <!-- Cutoff Option -->
            <div>
                <label for="cutoffInput">Enter Cutoff Marks:</label>
                <input type="number" id="cutoffInput" placeholder="Enter cutoff marks...">
                <button onclick="filterCollegesByCutoffFirstSet()">Apply</button>
            </div>
        </div>
        <div class="content">
            <h2>Engineering College Rankings</h2>
            <ul id="collegeList" class="college-list">
                <!-- Dynamic content will be loaded here based on the selected filter -->
            </ul>
        </div>
    </div>

    <div id="imageModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Images</h2>
            <div id="collegeImages">
                <!-- Images will be loaded here dynamically -->
            </div>
        </div>
    </div>

<script>


    function updateCollegeList(filteredColleges) {
        var collegeList = document.getElementById("collegeList");
        collegeList.innerHTML = "";

        filteredColleges.forEach(function (college) {
            var listItem = document.createElement("li");
            listItem.className = "college-item"; // Apply the college-item class
            var link = document.createElement("a");
            link.className = "college-link";
            link.href = college.website; // Link to the college website
            link.target = "_blank"; // Open link in a new tab
            link.textContent = college.name;

            link.addEventListener("click", function () {
                openModal(college.images);
            });

            listItem.appendChild(link);
            collegeList.appendChild(listItem);
        });
    }


    var colleges = [
            { name: "Sample College 1", fee: "Low", infrastructure: "Good", placement: "Excellent", images: ["https://via.placeholder.com/400", "https://via.placeholder.com/400", "https://via.placeholder.com/400"], cutoff: 70 },
            { name: "Sample College 2", fee: "Moderate", infrastructure: "Average", placement: "Good", images: ["https://via.placeholder.com/400", "https://via.placeholder.com/400"], cutoff: 65 },
            { name: "Sample College 3", fee: "High", infrastructure: "Excellent", placement: "Excellent", images: ["https://via.placeholder.com/400", "https://via.placeholder.com/400", "https://via.placeholder.com/400"], cutoff: 80 },
            // Add more college data with attributes as needed
            { name: "Thiagarajar College of Engineering", website: "https://www.tce.edu/", cutoff: 198 },
            { name: "Anna University of Technology, Madurai", website: "https://collegedunia.com/university/25866-anna-university-of-technology-madurai", cutoff: 195 },
            { name: "PSNA College of Engineering and Technology, Dindigul", website: "https://collegedunia.com/college/24315-psna-college-of-engineering-and-technology-dindigul", cutoff: 192 },
            { name: "NPR College of Engineering and Technology, Dindigul", website: "https://collegedunia.com/college/14400-npr-college-of-engineering-and-technology-dindigul", cutoff: 200 },
            { name: "Velammal College of Engineering and Technology (VCET), Madurai", website: "https://collegedunia.com/college/19147-velammal-college-of-engineering-and-technology-vcet-madurai", cutoff: 195 },
            { name: "Vaigai College of Engineering (VCE), Madurai", website: "https://collegedunia.com/college/45820-vaigai-college-of-engineering-vce-madurai", cutoff: 198 },
            { name: "Latha Mathavan Engineering College (LMEC), Madurai", website: "https://collegedunia.com/college/14088-latha-mathavan-engineering-college-lmec-madurai", cutoff: 192 },
            { name: "Raja College of Engineering and Technology, Veerapanjan, Madurai", website: "https://collegedunia.com/college/55643-raja-college-of-engineering-and-technology-veerapanjan-madurai", cutoff: 196 },
            { name: "Kodaikanal Institute of Technology (KIT), Dindigul", website: "https://collegedunia.com/college/14018-kodaikanal-institute-of-technology-kit-dindigul", cutoff: 199 },
            { name: "SBM College of Engineering and Technology, Dindigul", website: "https://collegedunia.com/college/45773-sbm-college-of-engineering-and-technology-dindigul", cutoff: 197 },
            { name: "Veerammal Engineering College (VEC), Dindigul", website: "https://collegedunia.com/college/57743-veerammal-engineering-college-vec-dindigul", cutoff: 193 },
            { name: "KLN College of Engineering (KLNCE), Sivaganga", website: "https://collegedunia.com/college/13926-kln-college-of-engineering-klnce-sivaganga", cutoff: 195 },
            { name: "KLN College of Information Technology (KLNCE), Sivaganga", website: "https://collegedunia.com/college/13927-kln-college-of-information-technology-klncit-sivaganga", cutoff: 196 },
            { name: "Pandian Saraswathi Yadav Engineering College, Sivaganga", website: "https://collegedunia.com/college/24338-pandian-saraswathi-yadav-engineering-college-sivaganga", cutoff: 194 },
            { name: "Vickram College of Engineering (VCE), Sivaganga", website: "https://collegedunia.com/college/19157-vickram-college-of-engineering-vce-sivaganga", cutoff: 197 },
            { name: "Theni Kammavar Sangam College of Technology (TKSCTE), Theni", website: "https://collegedunia.com/college/15474-theni-kammavar-sangam-college-of-technology-tkscte-theni", cutoff: 199 },
            { name: "Nadar Saraswathi College of Engineering and Technology, Theni", website: "https://collegedunia.com/college/14406-nadar-saraswathi-college-of-engineering-and-technology-theni", cutoff: 198 },
            { name: "Odaiyappa College of Engineering and Technology, Theni", website: "https://collegedunia.com/college/14523-odaiyappa-college-of-engineering-and-technology-theni", cutoff: 196 },
            { name: "Marthandam College of Engineering and Technology (MACET), Kanyakumari", website: "https://collegedunia.com/college/14291-marthandam-college-of-engineering-and-technology-macet-kanyakumari", cutoff: 202 }
        ];

    // Function to filter colleges based on cutoff marks for the first set
    function filterCollegesByCutoffFirstSet() {
        var minCutoff = 188;
        var maxCutoff = 200;

        var filteredColleges = colleges.filter(function (college) {
            return college.cutoff >= minCutoff && college.cutoff <= maxCutoff;
        });

        updateCollegeList(filteredColleges);
    }

    // Function to filter colleges based on cutoff marks for the second set
    function filterCollegesByCutoffSecondSet() {
        var additionalColleges = [
            { name: "Anna University of Technology, Madurai", website: "https://collegedunia.com/university/25866-anna-university-of-technology-madurai", cutoff: 195 },
            { name: "Velammal College of Engineering and Technology (VCET), Madurai", website: "https://collegedunia.com/college/19147-velammal-college-of-engineering-and-technology-vcet-madurai", cutoff: 195 },
            { name: "Vaigai College of Engineering (VCE), Madurai", website: "https://collegedunia.com/college/45820-vaigai-college-of-engineering-vce-madurai", cutoff: 198 },
            { name: "Latha Mathavan Engineering College (LMEC), Madurai", website: "https://collegedunia.com/college/14088-latha-mathavan-engineering-college-lmec-madurai", cutoff: 192 },
            { name: "NPR College of Engineering and Technology, Dindigul", website: "https://collegedunia.com/college/14400-npr-college-of-engineering-and-technology-dindigul", cutoff: 200 },
            { name: "Kodaikanal Institute of Technology (KIT), Dindigul", website: "https://collegedunia.com/college/14018-kodaikanal-institute-of-technology-kit-dindigul", cutoff: 199 },
            { name: "SBM College of Engineering and Technology, Dindigul", website: "https://collegedunia.com/college/45773-sbm-college-of-engineering-and-technology-dindigul", cutoff: 197 },
            { name: "KLN College of Engineering (KLNCE), Sivaganga", website: "https://collegedunia.com/college/13926-kln-college-of-engineering-klnce-sivaganga", cutoff: 195 },
            { name: "Pandian Saraswathi Yadav Engineering College, Sivaganga", website: "https://collegedunia.com/college/24338-pandian-saraswathi-yadav-engineering-college-sivaganga", cutoff: 194 },
        ];

        var minCutoff = 182;
        var maxCutoff = 187;

        var filteredColleges = colleges.filter(function (college) {
            return college.cutoff >= minCutoff && college.cutoff <= maxCutoff;
        });

        // Concatenate the additional colleges to the filtered list
        filteredColleges = filteredColleges.concat(additionalColleges);
        updateCollegeList(filteredColleges);
    }

     // Function to update the content of the collegeList dynamically
        function updateCollegeList(filteredColleges) {
            var collegeList = document.getElementById("collegeList");
            collegeList.innerHTML = "";

            filteredColleges.forEach(function (college) {
                var listItem = document.createElement("li");
                listItem.className = "college-item";
                var link = document.createElement("a");
                link.className = "college-link";
                link.href = college.website; // Link to the college website
                link.target = "_blank"; // Open link in a new tab
                link.textContent = college.name;

                link.addEventListener("click", function () {
                    openModal(college.images);
                });

                listItem.appendChild(link);
                collegeList.appendChild(listItem);
            });
        }

        // Function to open the modal and display images
        function openModal(images) {
            var modal = document.getElementById("imageModal");
            var imagesContainer = document.getElementById("collegeImages");
            imagesContainer.innerHTML = ""; // Clear previous images

            images.forEach(function (imageUrl) {
                var img = document.createElement("img");
                img.src = imageUrl;
                imagesContainer.appendChild(img);
            });

            modal.style.display = "block";
        }

        // Function to close the modal
        function closeModal() {
            var modal = document.getElementById("imageModal");
            modal.style.display = "none";
        }

        // Close the modal if the user clicks outside of it
        window.onclick = function (event) {
            var modal = document.getElementById("imageModal");
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };
function filterColleges(criterion) {
    var filteredColleges;

    // Check the selected criterion
   switch (criterion) {
    case 'infrastructure':
        filteredColleges = [
            { name: "Indian Institute of Technology Madras (IIT Madras)", location: "Chennai", website: "https://www.iitm.ac.in/" },
            { name: "National Institute of Technology Tiruchirappalli (NIT Trichy)", location: "Tiruchirappalli", website: "https://www.nitt.edu/" },
            { name: "Vellore Institute of Technology (VIT)", location: "Vellore", website: "https://www.vit.ac.in/" },
            { name: "SRM Institute of Science and Technology (SRMIST)", location: "Chennai", website: "https://www.srmist.edu.in/" },
            { name: "PSG College of Technology", location: "Coimbatore", website: "https://www.psgtech.edu/" },
            { name: "SSN College of Engineering", location: "Chennai", website: "https://www.ssn.edu.in/" },
            { name: "Hindustan Institute of Technology and Science (HITS)", location: "Chennai", website: "https://hindustanuniv.ac.in/" },
            { name: "Sathyabama Institute of Science and Technology", location: "Chennai", website: "https://www.sathyabama.ac.in/" },
            { name: "Thiagarajar College of Engineering (TCE)", location: "Madurai", website: "https://www.tce.edu/" },
            { name: "B.S. Abdur Rahman Crescent Institute of Science and Technology", location: "Chennai", website: "https://crescent.education/" },
            // Add more colleges if needed
        ];
        break;

        // Add more cases for other criteria if needed
case 'culturals':
    // Display specific colleges for the 'culturals' criterion
    filteredColleges = [
        { name: "Thiagarajar College of Engineering - [TCE], Madurai", website: "https://www.tce.edu/" },
        { name: "Anna University of Technology, Madurai", website: "https://collegedunia.com/university/25866-anna-university-of-technology-madurai" },
        { name: "Velammal College of Engineering and Technology - [VCET], Madurai", website: "https://collegedunia.com/college/19147-velammal-college-of-engineering-and-technology-vcet-madurai" },
        { name: "Vaigai College of Engineering- [VCE], Madurai", website: "https://collegedunia.com/college/45820-vaigai-college-of-engineering-vce-madurai" },
        { name: "Latha Mathavan Engineering College - [LMEC], Madurai", website: "https://collegedunia.com/college/14088-latha-mathavan-engineering-college-lmec-madurai" },
        { name: "PSNA College of Engineering and Technology, Dindigul", website: "https://collegedunia.com/college/24315-psna-college-of-engineering-and-technology-dindigul" },
        { name: "NPR College of Engineering and Technology, Dindigul", website: "https://collegedunia.com/college/14400-npr-college-of-engineering-and-technology-dindigul" },
        { name: "Kodaikanal Institute of Technology - [KIT], Dindigul", website: "https://collegedunia.com/college/14018-kodaikanal-institute-of-technology-kit-dindigul" },
        { name: "SBM College of Engineering and Technology, Dindigul", website: "https://collegedunia.com/college/45773-sbm-college-of-engineering-and-technology-dindigul" },
        { name: "Veerammal Engineering College - [VEC], Dindigul", website: "https://collegedunia.com/college/57743-veerammal-engineering-college-vec-dindigul" },
        { name: "KLN College of Engineering, Sivagangai", website: "https://collegedunia.com/college/13926-kln-college-of-engineering-klnce-sivaganga" },
        { name: "Pandian Saraswathi Yadav Engineering College, Sivaganga", website: "https://collegedunia.com/college/24338-pandian-saraswathi-yadav-engineering-college-sivaganga" },
        { name: "Vickram College of Engineering - [VCE], Sivaganga", website: "https://collegedunia.com/college/19157-vickram-college-of-engineering-vce-sivaganga" },
        { name: "Theni Kammavar Sangam College of Technology - [TKSCTE], Theni", website: "https://collegedunia.com/college/15474-theni-kammavar-sangam-college-of-technology-tkscte-theni" },
        { name: "Nadar Saraswathi College of Engineering and Technology, Theni", website: "https://collegedunia.com/college/14406-nadar-saraswathi-college-of-engineering-and-technology-theni" },
        { name: "Odaiyappa College of Engineering and Technology, Theni", website: "https://collegedunia.com/college/14523-odaiyappa-college-of-engineering-and-technology-theni" },
        { name: "Marthandam College Of Engineering And Technology, Kanyakumari", website: "https://collegedunia.com/college/14291-marthandam-college-of-engineering-and-technology-macet-kanyakumari" },
        { name: "DMI Engineering College, Kanyakumari", website: "https://collegedunia.com/college/14018-dmi-engineering-college-dmic-dindigul" },
        { name: "Mar Ephraem College of Engineering and Technology - [MECET], Kanyakumari", website: "https://collegedunia.com/college/19147-mar-ephraem-college-of-engineering-and-technology-mecet-kanyakumari" },
        { name: "Narayanaguru College of Engineering - [NGCE], Kanyakumari", website: "https://collegedunia.com/college/45820-narayanaguru-college-of-engineering-ngce-kanyakumari" }
    ];
    break;
case 'placement':
    filteredColleges = [
        { name: "Indian Institute of Technology Madras (IIT Madras)", location: "Chennai", website: "https://www.iitm.ac.in/" },
        { name: "National Institute of Technology Tiruchirappalli (NIT Trichy)", location: "Tiruchirappalli", website: "https://www.nitt.edu/" },
        { name: "Vellore Institute of Technology (VIT)", location: "Vellore", website: "https://www.vit.ac.in/" },
        { name: "SRM Institute of Science and Technology (SRMIST)", location: "Chennai", website: "https://www.srmist.edu.in/" },
        { name: "Sathyabama Institute of Science and Technology", location: "Chennai", website: "https://www.sathyabama.ac.in/" },
        { name: "SSN College of Engineering", location: "Chennai", website: "https://www.ssn.edu.in/" },
        { name: "Hindustan Institute of Technology and Science (HITS)", location: "Chennai", website: "https://hindustanuniv.ac.in/" },
        { name: "PSG College of Technology", location: "Coimbatore", website: "https://www.psgtech.edu/" },
        { name: "B.S. Abdur Rahman Crescent Institute of Science and Technology", location: "Chennai", website: "https://crescent.education/" },
        { name: "Thiagarajar College of Engineering (TCE)", location: "Madurai", website: "https://www.tce.edu/" },
        // Add more colleges as needed
    ];
    break;
case 'sports':
    // Display specific colleges for the 'sports' criterion
    filteredColleges = [
        { name: "National Institute of Technology (NIT), Tiruchirappalli", website: "https://www.nitt.edu/" },
        { name: "Shanmugha Arts, Science, Technology & Research Academy (SASTRA), Thanjavur", website: "https://www.sastra.edu/" },
        { name: "Pondicherry Engineering College (PEC), Puducherry", website: "https://www.pec.edu/" },
        { name: "National Institute of Technology (NIT), Puducherry", website: "https://nitpy.ac.in/" },
        { name: "Anna University College of Engineering, Trichy", website: "https://www.aubit.edu.in/" },
        { name: "AMET University, Chennai", website: "https://www.ametuniv.ac.in/" },
        { name: "B.S. Abdur Rahman Crescent Institute of Science and Technology, Chennai", website: "https://crescent.education/" },
        { name: "Vellore Institute of Technology (VIT), Vellore", website: "https://www.vit.ac.in/" },
        { name: "SRM Institute of Science and Technology, Chennai", website: "https://www.srmist.edu.in/" },
        { name: "Vel Tech Rangarajan Dr. Sagunthala R&D Institute of Science and Technology, Chennai", website: "https://www.veltech.edu.in/" },
        // Add more colleges as needed
    ];
    break;
case '25k-50k':
    // Display specific colleges for the '25k-50k' criterion
    filteredColleges = [
        { name: "Anna University, Chennai", website: "https://www.annauniv.edu/" },
        { name: "Indian Institute of Technology Madras (IIT Madras), Chennai", website: "https://www.iitm.ac.in/" },
        { name: "National Institute of Technology Tiruchirappalli (NIT Trichy)", website: "https://www.nitt.edu/" },
        { name: "Vellore Institute of Technology (VIT), Vellore", website: "https://www.vit.ac.in/" },
        { name: "PSG College of Technology, Coimbatore", website: "https://www.psgtech.edu/" },
        { name: "Sri Sivasubramaniya Nadar College of Engineering (SSNCE), Chennai", website: "https://www.ssn.edu.in/" },
        { name: "Thiagarajar College of Engineering (TCE), Madurai", website: "https://www.tce.edu/" },
        { name: "Coimbatore Institute of Technology (CIT), Coimbatore", website: "https://www.cit.edu.in/" },
        { name: "Government College of Technology (GCT), Coimbatore", website: "https://www.gct.ac.in/" },
        { name: "SRM Institute of Science and Technology, Chennai", website: "https://www.srmist.edu.in/" },
        // Add more colleges as needed
    ];
    break;
case 'above 2l':
    // Display specific colleges for the 'above 2l' criterion
    filteredColleges = [
        { name: "Indian Institute of Technology Madras (IIT Madras), Chennai", website: "https://www.iitm.ac.in/" },
        { name: "Vellore Institute of Technology (VIT), Vellore", website: "https://www.vit.ac.in/" },
        { name: "SRM Institute of Science and Technology, Chennai", website: "https://www.srmist.edu.in/" },
        { name: "Anna University, Chennai", website: "https://www.annauniv.edu/" },
        { name: "Amrita School of Engineering, Coimbatore", website: "https://www.amrita.edu/" },
        { name: "Sri Sivasubramaniya Nadar College of Engineering (SSNCE), Chennai", website: "https://www.ssn.edu.in/" },
        { name: "PSG College of Technology, Coimbatore", website: "https://www.psgtech.edu/" },
        { name: "Kumaraguru College of Technology (KCT), Coimbatore", website: "https://www.kct.ac.in/" },
        { name: "Vel Tech Rangarajan Dr. Sagunthala R&D Institute of Science and Technology, Chennai", website: "https://www.veltech.edu.in/" },
        { name: "Hindustan Institute of Technology and Science (HITS), Chennai", website: "https://www.hindustanuniv.ac.in/" },
        // Add more colleges as needed
    ];
    break;
case '1l-2l':
    // Display specific colleges for the '1l-2l' criterion
    filteredColleges = [
        { name: "SASTRA Deemed University, Thanjavur", website: "https://www.sastra.edu/" },
        { name: "Thiagarajar College of Engineering (TCE), Madurai", website: "https://www.tce.edu/" },
        { name: "PSG College of Technology, Coimbatore", website: "https://www.psgtech.edu/" },
        { name: "Vellore Institute of Technology (VIT), Vellore", website: "https://www.vit.ac.in/" },
        { name: "Sri Sivasubramaniya Nadar College of Engineering (SSNCE), Chennai", website: "https://www.ssn.edu.in/" },
        { name: "Kongu Engineering College, Erode", website: "https://www.kongu.ac.in/" },
        { name: "Vel Tech Rangarajan Dr. Sagunthala R&D Institute of Science and Technology, Chennai", website: "https://www.veltech.edu.in/" },
        { name: "St. Joseph's College of Engineering, Chennai", website: "https://www.stjosephs.ac.in/" },
        { name: "Kumaraguru College of Technology (KCT), Coimbatore", website: "https://www.kct.ac.in/" },
        { name: "Hindustan Institute of Technology and Science (HITS), Chennai", website: "https://www.hindustanuniv.ac.in/" },
        // Add more colleges as needed
    ];
    break;
case '75k-1l':
    // Display specific colleges for the '75k-1l' criterion
    filteredColleges = [
        { name: "Sri Venkateswara College of Engineering (SVCE), Chennai", website: "https://www.svce.ac.in/" },
        { name: "Panimalar Engineering College, Chennai", website: "http://www.panimalar.ac.in/" },
        { name: "Easwari Engineering College, Chennai", website: "https://www.srmeaswari.ac.in/" },
        { name: "RMD Engineering College, Chennai", website: "https://www.rmd.ac.in/" },
        { name: "Sri Sai Ram Institute of Technology, Chennai", website: "http://www.sairaminstitute.com/" },
        { name: "Vel Tech High Tech Dr. Rangarajan Dr. Sakunthala Engineering College, Chennai", website: "https://www.velhightech.com/" },
        { name: "Adhiyamaan College of Engineering, Hosur", website: "https://adhiyamaan.ac.in/" },
        { name: "Hindustan Institute of Technology and Science (HITS), Chennai", website: "https://www.hindustanuniv.ac.in/" },
        { name: "Sri Krishna College of Engineering and Technology (SKCET), Coimbatore", website: "https://www.skcet.ac.in/" },
        { name: "Kumaraguru College of Technology (KCT), Coimbatore", website: "https://www.kct.ac.in/" },
        // Add more colleges as needed
    ];
    break;
case '50k-75k':
    // Display specific colleges for the '50k-75k' criterion
    filteredColleges = [
        { name: "Government College of Engineering, Salem", website: "https://www.gcesalem.edu.in/" },
        { name: "Thiagarajar College of Engineering (TCE), Madurai", website: "https://www.tce.edu/" },
        { name: "Kongu Engineering College, Erode", website: "https://www.kongu.ac.in/" },
        { name: "PSG College of Technology, Coimbatore", website: "https://www.psgtech.edu/" },
        { name: "Government College of Engineering, Tirunelveli", website: "https://www.gcetly.ac.in/" },
        { name: "Coimbatore Institute of Technology (CIT), Coimbatore", website: "https://www.cit.edu.in/" },
        { name: "St. Joseph's College of Engineering, Chennai", website: "https://www.stjosephs.ac.in/" },
        { name: "Vel Tech Rangarajan Dr. Sagunthala R&D Institute of Science and Technology, Chennai", website: "https://www.veltech.edu.in/" },
        { name: "Sri Sai Ram Engineering College, Chennai", website: "https://sairam.edu.in/" },
        { name: "Rajalakshmi Engineering College, Chennai", website: "https://www.rajalakshmi.org/" },
        // Add more colleges as needed
    ];
    break;


        default:
            // If no specific criterion is selected, show all colleges
            filteredColleges = colleges;
            break;
    }

    // Update the college list with the filtered colleges
    updateCollegeList(filteredColleges);
}


</script>
</body>
</html>