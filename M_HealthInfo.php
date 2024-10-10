<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Health Records</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background-color: #f5f5f5;
    }

    header {
      background-color: #2D9596;
      color: #fff;
      padding: 1em;
      text-align: center;
    }

    nav {
      display: flex;
      justify-content: center;
      background-color: #444;
      padding: 0.5em;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      padding: 0.5em 1em;
      margin: 0 0.25em;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    nav a:hover {
      background-color: #555;
    }

    section {
      padding: 2em;
    }

    .record-section {
      width: 60%;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      margin: auto;
      margin-top: 20px;
    }

    h2 {
      color: #2D9596;
    }

    .form-field input[type="radio"] {
      display: inline-block;
      margin-right: 5px;
      /* Adjust as needed */
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .dropdown:hover>.dropdown-content {
      display: block;
    }

    .subdropdown {
      position: relative;
      display: inline-block;
    }

    .subdropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
      left: 100%;
      top: 0;
    }

    .subdropdown:hover>.subdropdown-content {
      display: block;
    }

    .subdropdown {
      position: relative;
      display: inline-block;
    }

    .subdropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      z-index: 1;
    }

    .subdropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .subdropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .dropdown-item:hover .dropdown-options {
      display: block;
    }

    .dropdown-options {
      display: none;
      position: absolute;
      top: 0;
      left: 100%;
      /* Position it to the right */
      background-color: #f9f9f9;
      min-width: 120px;
      z-index: 1;
    }

    .dropdown-options a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-options a:hover {
      background-color: #f1f1f1;
    }

    .custom-button {
      background-color: #29892c;
      /* Green */
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 5px;
    }

    .custom-button:hover {
      background-color: #45a049;
      /* Darker green */
    }
  </style>
</head>

<body>
  <header>
    <h1>Health Records</h1>
  </header>

  <nav>
    <button onclick="showSection('prescription')" style="width: 200px; height: 30px;margin-right: 10px;background-color:  #555;border: 0px; color: #f5f5f5; border-radius: 5%;">Online
      Prescription</button>
    <button onclick="showSection('certificate')" style="width: 200px; height: 30px;margin-right: 10px;background-color:  #555;border: 0px; color: #f5f5f5; border-radius: 5%;">Medical
      History</button>
    <button onclick="showSection('followup')" style="width: 200px; height: 30px;margin-right: 10px;background-color:  #555;border: 0px; color: #f5f5f5; border-radius: 5%;">Follow-up
      on the Doctor</button>
    <button onclick="showSection('vaccination')" style="width: 200px; height: 30px;margin-right: 10px;background-color:  #555;border: 0px; color: #f5f5f5; border-radius: 5%;">Vaccination
      Record</button>
    <button onclick="showSection('InvestigationReport')" style="width: 200px; height: 30px;margin-right: 10px;background-color:  #555;border: 0px; color: #f5f5f5; border-radius: 5%;">Investigation
      Report</button>
  </nav>
  </nav>


  <section id="prescription" class="record-section">
    <h2>Online Prescription</h2>
    <p>This section contains information about your online prescriptions.</p>
    <a href="online prescription/addpres.html">
      <center><button class="btn" style="background-color: green; color: white;border: 0px;height: 40px;  padding: 7px;margin-bottom: 10px;width: 150px; border-radius: 5%;" onclick="submitPrescription()">Add Prescription</button></center>
    </a>
    <a href="online prescription/viewpres.html">
      <center><button class="btn" style="background-color: green; color: white;border: 0px;height: 40px;  padding: 7px;margin-bottom: 10px;width: 150px; border-radius: 5%;" onclick="submitPrescription()">View Prescription</button></center>
    </a>
    <a href="online prescription/updatepres.html">
      <center><button class="btn" style="background-color: green; color: white;border: 0px;height: 40px;  padding: 7px;margin-bottom: 10px;width: 150px; border-radius: 5%;" onclick="submitPrescription()">Update Prescription</button></center>
    </a>

    <div class="form-container">
    </div>
  </section>

  <!-- Display Prescription Results -->
  <div id="prescriptionResults"></div>

  <section id="certificate" class="record-section">
    <h2>Medical History</h2>
    <p>This section contains information about your medical History.</p>
    <a href="./MedicalHistory/AddMedicalHistory.html">
      <center><button class="btn" style="background-color: green; color: white;border: 0px;height: 40px;  padding: 7px;margin-bottom: 10px;width: 150px; border-radius: 5%;" onclick="submitPrescription()">Add Medical History</button></center>
    </a>
    <a href="./MedicalHistory/ViewMedicalHistory.html">
      <center><button class="btn" style="background-color: green; color: white;border: 0px;height: 40px;  padding: 7px;margin-bottom: 10px;width: 150px; border-radius: 5%;" onclick="submitPrescription()">View Medical History</button></center>
    </a>
    <a href="./MedicalHistory/UpdateMedicalHistory.html">
      <center><button class="btn" style="background-color: green; color: white;border: 0px;height: 40px;  padding: 7px;margin-bottom: 10px;width: 150px; border-radius: 5%;" onclick="submitPrescription()">Update Medical History</button></center>
    </a>
  </section>

  <section id="followup" class="record-section">
    <h2>Follow-up on the Doctor</h2>
    <p>This section contains information about your follow-up appointments with the doctor.</p>
    <!-- Add relevant form fields, details, or data here -->
  </section>

  <section id="vaccination" class="record-section">
    <h2>Vaccination Record</h2>
    <p>This section contains information about your vaccination records.</p>
    <a href="vaccination records/AddVaccination.html">
      <center><button class="btn" style="background-color: green; color: white;border: 0px;height: 40px;  padding: 7px;margin-bottom: 10px;width: 150px; border-radius: 5%;" onclick="submitPrescription()">Add Vaccination</button></center>
    </a>
    <a href="vaccination records/ViewVaccination.html">
      <center><button class="btn" style="background-color: green; color: white;border: 0px;height: 40px;  padding: 7px;margin-bottom: 10px;width: 150px; border-radius: 5%;" onclick="submitPrescription()">View Vaccination</button></center>
    </a>
    <a href="vaccination records/UpdateVaccination.html">
      <center><button class="btn" style="background-color: green; color: white;border: 0px;height: 40px;  padding: 7px;margin-bottom: 10px;width: 150px; border-radius: 5%;" onclick="submitPrescription()">Update Vaccination</button></center>
    </a>
    <div class="form-container">
    </div>
  </section>
  <section id="InvestigationReport" class="record-section">

    <div class="dropdown" onmouseover="autoScrollDropdown()">
      <h2>Investigation Report</h2>
      <p>This section contains information about your Investigation Reports.</p>
      <P>Choose your Test Category:</P>
      <button class="custom-button">Choose...</button>
      <div class="dropdown-content">
        <div class="subdropdown">
          <a href="#">Haematology</a>
          <div class="subdropdown-content">
            <a href="#">Hemoglobin estimation</a>
            <a href="#">Total RBC count</a>
            <a href="#">Reticulocyte count</a>
            <a href="#">Absolute eosinophil count</a>
            <a href="#">Total leukocyte count</a>
            <a href="#">Differential leukocyte count</a>
            <a href="#">Platelet count</a>
            <a href="#">CBC</a>
            <a href="#">ESR</a>
            <a href="#">Peripheral blood smear</a>
          </div>
        </div>
        <div class="subdropdown">
          <a href="#">Clinical Pathology</a>
          <div class="subdropdown-content">
            <a href="#">Urine albumin</a>
            <a href="#">Urine sugar</a>
            <a href="#">Urine hemoglobin</a>
            <a href="#">Urine microscopy</a>
            <a href="#">Pap smear</a>
            <a href="#">Sputum cytology</a>
            <a href="#">Histopathology</a>
            <a href="#">Cytology of neck</a>
            <a href="#">Bone marrow</a>
          </div>
        </div>
        <div class="subdropdown">
          <a href="#">Biochemistry</a>
          <div class="subdropdown-content">
            <div class="dropdown-item" id="lft-dropdown">
              <a href="">LFT (IMPLEMENTED)</a>
              <div class="dropdown-options">
                <a href="AddLFTReport.html">Add</a>
                <a href="#">Update</a>
                <a href="#">View</a>
              </div>
            </div>
            <a href="#">Pregnancy test</a>
            <a href="#">24 hours urinary protein</a>
            <a href="#">Blood sugar</a>
            <a href="#">Glucose tolerance test</a>

            <a href="#">Total protein, Albumin</a>
            <a href="#">KFT (Urea, Creatinine)</a>
            <a href="#">Lipid profile</a>
            <a href="#">Amylase, Lipase</a>
            <a href="#">Sodium, Potassium, Calcium, Phosphorus, Magnesium, Chloride</a>
            <a href="#">Blood gas analysis</a>
            <a href="#">CPK, LDH</a>
            <a href="#">Free T3, Free T4</a>
          </div>
        </div>
        <div class="subdropdown">
          <a href="#">Microbiology</a>
          <div class="subdropdown-content">
            <a href="#">Urine M/E for pus cells</a>
            <a href="#">Examination for leprosy</a>
            <a href="#">Throat swab for diphtheria</a>
            <a href="#">Hanging drop test for Weil-Felix</a>
            <a href="#">Routine examination stool for occult blood</a>
            <a href="#">Gram stain for meningococcus</a>
            <a href="#">KOH study for fungus</a>
            <a href="#">Blood culture</a>
            <a href="#">Urine, stool, CSF, fluid, throat swab culture and antimicrobial sensitivity</a>
            <a href="#">Stool culture for Vibrio</a>
            <a href="#">RPR, VDRL test</a>
            <a href="#">IgM for Measles</a>
          </div>
        </div>
        <div class="subdropdown">
          <a href="#">Serology</a>
          <div class="subdropdown-content">
            <a href="#">Rheumatoid factor quantitative</a>
            <a href="#">Anti-streptolysin O quantitative</a>
          </div>
        </div>
        <div class="subdropdown">
          <a href="#">Other Diagnostic Test</a>
          <div class="subdropdown-content">
            <a href="#">Visual Inspection Acetic Acid (VIA)</a>
            <a href="#">Water quality testing</a>
            <a href="#">Estimation of residual chlorine in drinking water</a>
            <a href="#">Urine for iodine, iodometry titration</a>
            <a href="#">Blood bank</a>
          </div>
        </div>
        <div class="subdropdown">
          <a href="#">Radiology</a>
          <div class="subdropdown-content">
            <div class="dropdown-item" id="xray-dropdown">
              <a href="">X-ray (IMPLEMENTED)</a>
              <div class="dropdown-options">
                <a href="XrayReport.html">Add</a>
                <a href="#">Update</a>
                <a href="#">View</a>
              </div>
            </div>
            <a href="#">CR (Computed Radiography)</a>
            <a href="#">Intra Oral Periapical (IOPA) X-ray</a>
            <a href="#">Orthopantomogram (OPG)</a>
            <a href="#">Ultrasonography (USG)</a>
            <a href="#">Electrocardiography (ECG)</a>
            <a href="#">Computed Tomography (CT) Scan</a>
            <a href="#">Magnetic Resonance Imaging (MRI)</a>
            <a href="#">Electroencephalography (EEG)</a>
            <a href="#">Pulmonary Function Test (PFT)</a>
            <a href="#">Endoscopy</a>
          </div>
        </div>
      </div>
  </section>

  <script>
    function submitPrescriptionForm() {
      // Retrieve values from the form
      var firstName = document.getElementById('firstName').value;
      var lastName = document.getElementById('lastName').value;
      var age = document.getElementById('age').value;
      var sex = document.getElementById('sex').value;
      var height = document.getElementById('height').value;
      var prescriptionDate = document.getElementById('prescriptionDate').value;
      var healthIssue = document.getElementById('healthIssue').value;
      var medicationDosage = document.getElementById('medicationDosage').value;

      // Display the prescription results in the specified div
      var prescriptionResultsDiv = document.getElementById('prescriptionResults');
      prescriptionResultsDiv.innerHTML = `
                <p><strong>Prescription Details:</strong></p>
                <p><strong>Name:</strong> ${firstName} ${lastName}</p>
                <p><strong>Age:</strong> ${age}</p>
                <p><strong>Sex:</strong> ${sex}</p>
                <p><strong>Height:</strong> ${height}</p>
                <p><strong>Date of Prescription:</strong> ${prescriptionDate}</p>
                <p><strong>Health Issue:</strong> ${healthIssue}</p>
                <p><strong>Medication Dosage:</strong> ${medicationDosage}</p>
            `;
    }

    function showSection(sectionId) {
      // Hide all sections
      var sections = document.querySelectorAll('.record-section');
      sections.forEach(function(section) {
        section.style.display = 'none';
      });

      // Show the selected section
      var selectedSection = document.getElementById(sectionId);
      selectedSection.style.display = 'block';
    }
  </script>

</body>

</html>