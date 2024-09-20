# Intelligent-Hospital-Management-System-with-Machine-Learning-for-Allergy-and-Medication-Management

# Project 1: Medical Diagnosis Prediction System
Objective: Develop a system to predict potential medical diagnoses for patients based on their
symptoms and medical history. This system aims to enhance diagnostic accuracy and support
clinical decision-making by leveraging advanced machine learning techniques.
Tables Used:
- `patient_medicalhistory`: Contains records of patient medical histories, including past
conditions and treatments.
- `diagnosis_master`: Stores a list of possible diagnoses and their descriptions.
- `patient_add`: Holds basic patient information such as name, age, and medical details.
- `consultation_reg`: Documents patient consultations and interactions with healthcare providers.
Approach:
● Data Collection and Preparation: Gather and preprocess data from the aforementioned
tables to create a comprehensive dataset. This involves handling missing values,
normalizing data, and encoding categorical variables.
● Model Training:
- Model Selection:Train over 5 different models, including various classification
algorithms such as Decision Trees, Support Vector Machines (SVM), Gradient Boosting
Machines (GBM), and Neural Networks.
- Evaluation Metrics: Assess the models based on performance metrics like accuracy,
precision, recall, and F1-score. This helps in determining the most effective model for
predicting diagnoses.
● Model Integration:
- Choosing the Best Model: After evaluating the models, the RandomForest model
emerged as the most performant based on its high accuracy and reliability.
- Model Saving:Save the trained RandomForest model in a serialized format (.pkl for
Python or .php for PHP) to ensure ease of use and integration into a web application.
● Implementation in PHP:
- Integration: Implement the saved model into a PHP-based prediction page. This involves
creating a PHP script that loads the model and performs predictions based on user inputs.
- User Interface: Develop a user-friendly interface for entering patient symptoms and
medical history, which feeds into the prediction system to generate potential diagnoses.
● Future Enhancements:
- NLP Integration:Consider incorporating Natural Language Processing (NLP) to extract
relevant information from unstructured medical notes and improve prediction accuracy.
- Model Updates: Periodically retrain the model with new data to ensure its predictions
remain accurate and up-to-date.
By combining advanced machine learning techniques and robust model evaluation, this system
aims to provide reliable diagnostic predictions and support healthcare professionals in their
decision-making process

![Test1](https://github.com/nessrine-lafhal/Intelligent-Hospital-Management-System-with-Machine-Learning-for-Allergy-and-Medication-Management/blob/master/pic1.png)

# Project 2: Allergy and Medication Management System
Objective: Analyze patient allergy data and match it with available medications to prevent
allergic reactions.
Tables Used: `patient_allergy`, `phm_item_information_add`, `phm_categorymaster_add`,
`phm_genericmaster_add`.
Approach: Utilize classification models to predict the risk of allergies based on prescribed
medications. Decision trees or neural networks can be effective for this task.
Form Used:
● Patient Allergy Form
● Patient ID: Unique identifier for the patient.
● Patient Name:Full name of the patient.
● Patient Age: Age of the patient.
● Sex: Gender of the patient (Male, Female, Other).
● Occupation: Patient's job or profession.
● Weight (kg): Weight of the patient in kilograms.
● Height (cm): Height of the patient in centimeters.
● Allergy Name: Select from a list of common allergies (e.g., Pollen, Peanuts, Lactose,
Gluten).
● Type of Allergy: Choose the type of allergy (e.g., Food Allergy, Drug Allergy,
Environmental Allergy, Insect Allergy, Latex Allergy).
● Prescribed Medication: Choose the medication that has been prescribed (e.g., Aspirin,
Ibuprofen, Penicillin).
● Symptoms: Start typing to select common symptoms (e.g., Sneezing, Rash, Itching,
Swelling, Shortness of Breath).
● Symptoms Details: Describe the symptoms in detail.
● Family Allergy History: Indicate whether there is a family history of allergies (Yes or
No).
● Allergy Severity: Rate the severity of the allergy (Mild, Moderate, Severe,
Life-threatening).
● Duration of Allergy (in years): Specify how long the patient has had the allergy.
Implementation Details:
● Data Collection:Gather data from the completed form to analyze patient allergies and
prescribed medications.
● Model Training: Train multiple classification models to predict allergy risks. More than 8
models were trained, including CNN, which showed the best performance in analysis.
● Model Selection and Integration: Choose the most performant model (RandomForest)
and save it in a suitable format (.pkl or .php) for ease of use in a PHP prediction page.
● Prediction:After the user fills out the form, simply click on 'Predict' to generate a
prediction regarding potential allergic reactions based on the provided data.

![Test1](https://github.com/nessrine-lafhal/Intelligent-Hospital-Management-System-with-Machine-Learning-for-Allergy-and-Medication-Management/blob/master/pic2.png)

# projet 3 : Automatic Laboratory Test Classification
Objective:Develop a system to automatically classify laboratory test results, facilitating quicker
and more accurate diagnoses.
Tables Used:
● laboratory_resultentry`: Contains individual test results with attributes such as test type,
result value, and patient information.
● `opd_lab_resultentry`: Includes results from outpatient department (OPD) lab tests.
● `blood_test_pare`: Stores information about blood test results, including test types and
result values.
Form Used:
● Test Classification Form
- Service ID: Dropdown list for selecting the type of service (e.g., Cardiology, Neurology,
Radiology).
- Date: Date picker to select the test date (format: dd/mm/yyyy).
- Test Result: Dropdown list to choose the result (e.g., Normal, Abnormal, Inconclusive,
Other).
- Interpretation: Dropdown list to select the result interpretation (e.g., Positive, Negative,
Borderline, Inconclusive, Other).
- Impression: Dropdown list for the impression of the test (e.g., Benign, Malignant,
Suspicious, Inconclusive, Other).
- Age: Numeric input to enter the patient's age.
● Approach:
● Data Preparation:
- Data Collection: Gather historical laboratory test data from the mentioned tables. This
includes test results, interpretations, impressions, and patient demographics.
- Data Preprocessing: Clean and preprocess the data, handling missing values, outliers,
and standardizing formats. Convert categorical variables into numerical values if
necessary using techniques like one-hot encoding.
● Model Development:
- Feature Engineering:Identify and create relevant features from the raw data. Features
might include test result values, patient age, service type, and historical test results.
- Model Selection: Train multiple classification models to determine the best-performing
one. Consider using models like Logistic Regression, Decision Trees, Random Forest,
Gradient Boosting, or Support Vector Machines (SVM).
- Model Training:Train the models using historical test data. Utilize cross-validation to tune
hyperparameters and avoid overfitting.
- Model Evaluation:Assess model performance using metrics such as accuracy, precision,
recall, F1-score, and AUC-ROC curve. Select the model with the best performance
metrics.
● Model Integration:
- Saving the Model:Save the best-performing model (e.g., Random Forest) in a suitable
format (e.g., `.pkl` for Python or `.php` if using a PHP-based approach) for easy
integration.
- System Integration:Implement the saved model in a PHP application. The application
should be able to load the model and use it to classify new test results based on the
input from the form.
● Prediction Process:
- Form Submission:After the user fills out the test classification form and submits it, the
system will:
- Collect the input data including service ID, test result, interpretation, impression, and
patient age.
- Feed this data into the trained model.
- Generate a classification result (e.g., normal or abnormal) based on the model’s
prediction.
- Display Results:** Present the classification result to the user, potentially along with a
detailed explanation of the prediction.
● Continuous Improvement:
- Feedback Loop:Collect feedback on the predictions to refine and retrain the model
periodically.
- Model Updates:Regularly update the model with new data to maintain its accuracy and
relevance

![Test1](https://github.com/nessrine-lafhal/Intelligent-Hospital-Management-System-with-Machine-Learning-for-Allergy-and-Medication-Management/blob/master/pic3.png)

