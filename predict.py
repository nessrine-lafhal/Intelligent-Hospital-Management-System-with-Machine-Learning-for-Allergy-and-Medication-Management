import pickle
import sys
import json
import pandas as pd
from sklearn.preprocessing import StandardScaler, LabelEncoder

# Load the model and scaler
with open('random_forest_model.pkl', 'rb') as model_file:
    model = pickle.load(model_file)

with open('scaler.pkl', 'rb') as scaler_file:
    scaler = pickle.load(scaler_file)

# Read input data from command-line arguments
data = json.loads(sys.argv[1])
df = pd.DataFrame([data])

# Apply the same preprocessing as in the training phase
# Convert categorical columns to numeric if necessary
label_encoder = LabelEncoder()
# Add necessary encoding here if needed

# Standardize the data
df_scaled = scaler.transform(df)

# Predict
prediction = model.predict(df_scaled)

# Output result
print(prediction[0])
