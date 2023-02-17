import snscrape.modules.twitter as sntwitter
import pandas as pd
import predict as predictFile
import crawl as cr
from flask import Flask, request

df = pd.read_csv("./data_omicron.csv")


app = Flask(__name__)
@app.route('/trainingDatas')
def index():
    return df.to_json(orient='records')

@app.route('/prediction')
def index2():
    data = predictFile.update()
    return data.to_json(orient='records')

@app.route('/crawlDatas' , methods=["POST"])
def index3():
    query = request.json
    data = cr.crawls(query['inputQuery'])
    return data.to_json(orient='records')
@app.route('/tes_data')
def index4():
    return df.to_json(orient='records')

app.run()