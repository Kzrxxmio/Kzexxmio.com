<?php

$name = "ธนภัทร ชนะบูรณ์";
$jobTitle = "นักโซ้ยน้ำสีทองแห่งเขาดุ๋มเดียง";
$profileImage = "Bell.jpg"; 
$contact = [
    "Email" => "Keroro12aq@Gmail.com",
    "Phone" => "0990186622",
    "FaceBook" => "Thanapat Chanaboon",
];

$skills = ["กินเก่ง", "คอแข็ง", "ยกได้ไม่เลิก", "น้ำแข็งไม่ต้อง", "น้ำไม่แตะ"];

$experience = [
    [
        "jobTitle" => "บ้านเพื่อน",
        "company" => "บ้านไอบอล จำกัด",
        "duration" => "2022-ปัจจุบัน",
        "description" => "บางช่วงอาจจะแค่2-3ขวดแต่เทศกาลยันเช้ายังนิ่ม"
    ],
];

$education = [
    [
        "degree" => "สาขาคอมพิวเตอร์",
        "institution" => "เทคโนโลยีพณิชยการพลาญชัยร้อยเอ็ด",
        "year" => "2024"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - <?php echo $name; ?></title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f9;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            margin: 0;
            padding-bottom: 10px;
            color: #222;
        }

        .profile {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
            border-bottom: 2px solid #ddd;
            padding-bottom: 15px;
        }

        .profile img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }

        .profile .details h1 {
            font-size: 2rem;
            color: #0056b3;
        }

        .profile .details p {
            font-size: 1.2rem;
            color: #555;
        }

        .section {
            margin-bottom: 20px;
        }

        .section ul {
            padding-left: 20px;
            list-style: none;
        }

        .section ul li {
            margin-bottom: 5px;
        }

        .section h2 {
            border-bottom: 2px solid #0056b3;
            display: inline-block;
            padding-bottom: 5px;
        }

        ul li strong {
            color: #0056b3;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">

        <div class="profile">
            <div class="details">
                <h1><?php echo $name; ?></h1>
                <p><strong><?php echo $jobTitle; ?></strong></p>
            </div>
            <img src="<?php echo $profileImage; ?>" alt="Profile Picture">
        </div>
        

        <div class="section">
            <h2>Contact Information</h2>
            <ul>
                <?php foreach ($contact as $key => $value): ?>
                    <li><strong><?php echo $key; ?>:</strong> <?php echo $value; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="section">
            <h2>Skills</h2>
            <ul>
                <?php foreach ($skills as $skill): ?>
                    <li><?php echo $skill; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>


        <div class="section">
            <h2>Work Experience</h2>
            <?php foreach ($experience as $job): ?>
                <p><strong><?php echo $job['jobTitle']; ?></strong> at <?php echo $job['company']; ?> (<?php echo $job['duration']; ?>)</p>
                <p><?php echo $job['description']; ?></p>
            <?php endforeach; ?>
        </div>


        <div class="section">
            <h2>Education</h2>
            <?php foreach ($education as $edu): ?>
                <p><strong><?php echo $edu['degree']; ?></strong> from <?php echo $edu['institution']; ?> (<?php echo $edu['year']; ?>)</p>
            <?php endforeach; ?>
        </div>


        <div class="footer">
            <p>&copy; <?php echo date("Y"); ?> by <?php echo $name; ?>อยากให้ท่าน ผจก โปรดทราบเรื่องคอของผม </p>
        </div>
    </div>
</body>
</html>
