<?php
include './U_CheckLogin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swasth Bharat Pranali</title>
    <link rel="icon" type="image/x-icon" href="./logo.ico">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #f0f0f0;
            padding: 20px;
            text-align: center;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #f0f0f0;
            padding: 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .content-card {
            display: grid;
            grid-template-columns: 50% 50%;
            grid-gap: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 50px;
        }

        .content-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .content-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content-card .text-container {
            padding: 20px;
        }

        .content-card h3 {
            margin-top: 0;
        }

        .content-card p {
            margin-bottom: 0;
        }

        .expanded-content {
            display: none;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .expanded-content.show {
            display: block;
        }
    </style>
</head>
<body>
    <header>
        <h1>Health Management System</h1>
    </header>

    <main>
        <section id="educational-content">
            <div class="content-card" onclick="toggleContent(this)">
                <img src="./images/heart.jpeg" alt="Heart Disease Image">
                <div class="text-container">
                    <h3>Heart Disease</h3>
                    <p>Heart disease remains the leading cause of death globally, claiming millions of lives each year. Despite significant advancements in treatment and prevention, it continues to be a major public health concern. This article delves into the current state of heart disease, exploring its various forms, potential cures on the horizon, and the ongoing battle for a healthier future.</p>
                </div>
                <div class="expanded-content">
                    <p>2. Current Status:

                        According to WHO, cardiovascular diseases (CVDs) cause approximately 17.9 million deaths annually, representing 31% of all global deaths.
                        Recent advancements in medical imaging techniques, such as cardiac MRI and CT angiography, have improved diagnostic accuracy.
                        3. Cure and Treatment:
                        
                        While a definitive cure is lacking, treatment focuses on symptom management, disease progression, and complication prevention.
                        Pharmacotherapy includes medications like statins, beta-blockers, and ACE inhibitors to control blood pressure, cholesterol, and heart rhythm abnormalities.
                        Interventional procedures like angioplasty, stent placement, and coronary artery bypass surgery restore blood flow to the heart.
                        Implantable devices such as pacemakers and defibrillators regulate abnormal heart rhythms and prevent sudden cardiac arrest.
                        4. Types of Heart Disease:
                        
                        Coronary Artery Disease (CAD): Characterized by atherosclerosis leading to narrowed coronary arteries, causing chest pain or heart attacks.
                        Heart Failure: Occurs when the heart cannot pump enough blood, resulting in symptoms like fatigue, shortness of breath, and fluid retention.
                        Arrhythmias: Irregular heart rhythms disrupt pumping function, increasing the risk of stroke or cardiac arrest.
                        Valvular Heart Disease: Dysfunction of heart valves leads to symptoms like chest pain, fatigue, and shortness of breath.
                        5. Preventive Measures:
                        
                        Lifestyle modifications such as a heart-healthy diet, regular exercise, and smoking cessation reduce risk factors.
                        Managing conditions like hypertension, diabetes, and hyperlipidemia through early detection and intervention is crucial.
                        Routine medical check-ups for blood pressure and cholesterol screenings enable timely intervention and personalized risk assessment.</p>
                </div>
            </div>

            <div class="content-card" onclick="toggleContent(this)">
                <img src="./images/Blood Donation.jpeg" alt="Diabetes Image">
                <div class="text-container">
                    <h3>Diabetes</h3>
                    <p>Diabetes is a chronic metabolic disorder characterized by high blood sugar levels.
                        It poses a significant public health concern globally due to its rising prevalence and associated complications.</p>
                </div>
                <div class="expanded-content">
                    <p>
                        2. Current Status:
                        
                        The International Diabetes Federation (IDF) estimates that approximately 463 million adults aged 20-79 years were living with diabetes in 2019, with projections indicating a steady increase.
                        Diabetes is associated with numerous complications, including cardiovascular disease, kidney disease, neuropathy, and retinopathy.
                        3. Cure and Treatment:
                        
                        While there is no cure for diabetes, treatment focuses on managing blood sugar levels to prevent complications and improve quality of life.
                        Pharmacotherapy includes oral medications like metformin, sulfonylureas, and insulin injections to regulate blood glucose levels.
                        Lifestyle modifications such as adopting a balanced diet, regular physical activity, weight management, and smoking cessation are essential components of diabetes management.
                        Continuous glucose monitoring (CGM) devices and insulin pumps are technological advancements that aid in diabetes management, providing real-time data and insulin delivery.
                        4. Types of Diabetes:
                        
                        Type 1 Diabetes: An autoimmune condition where the body's immune system attacks insulin-producing beta cells in the pancreas, requiring lifelong insulin therapy.
                        Type 2 Diabetes: Typically develops in adults and is characterized by insulin resistance, where cells fail to respond to insulin properly. It may be managed with lifestyle changes, oral medications, or insulin therapy.
                        Gestational Diabetes: Occurs during pregnancy and usually resolves after childbirth, but increases the risk of developing type 2 diabetes later in life.
                        5. Preventive Measures:
                        
                        Adopting a healthy lifestyle, including a balanced diet rich in fruits, vegetables, whole grains, and lean proteins, is crucial in preventing type 2 diabetes.
                        Regular physical activity helps improve insulin sensitivity and control blood sugar levels.
                        Maintaining a healthy weight through portion control and calorie moderation reduces the risk of developing type 2 diabetes.
                        Screening for prediabetes and early detection of diabetes through routine medical check-ups enable timely intervention and lifestyle modifications.
                        Conclusion:
                        In conclusion, diabetes remains a significant health challenge worldwide, with its prevalence on the rise. While there is no cure, effective management strategies, including medication, lifestyle modifications, and technological advancements, play a vital role in controlling blood sugar levels and preventing complications. By raising awareness, promoting healthy lifestyles, and investing in diabetes research and care, we can mitigate the burden of diabetes and improve the quality of life for individuals affected by this condition.</p>
                </div>
            </div>

            <!-- Add more content cards as needed -->
            <center><a href="./U_AfterLogin.php"><input type="submit" value="Go Back"></a></center>
        </section>
    </main>

    <script>
        function toggleContent(card) {
            card.classList.toggle('expanded');
            const expandedContent = card.querySelector('.expanded-content');
            expandedContent.classList.toggle('show');
        }
    </script>
</body>
</html>