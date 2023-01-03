### required module a###


import json
from flask import Flask, render_template, request, send_file, Response
from flask_sqlalchemy import SQLAlchemy
from io import BytesIO

### app creation a###


app = Flask(__name__)
app.config["SECRET_KEY"]="bng%451h(4gnnvyn#GG7Ng7+t8t"
app.config["SQLALCHEMY_DATABASE_URI"] = "sqlite:///audiobooks.db"
app.config["SQLALCHEMY_TRACK_MODIFICATIONS"] = False
db = SQLAlchemy(app)

### Database Models ###


class Audiobooks(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    image_file_name = db.Column(db.String(255))
    image_file_data = db.Column(db.LargeBinary)
    pdf_file_name = db.Column(db.String(255))
    pdf_file_data = db.Column(db.LargeBinary)
    audio_file_name = db.Column(db.String(255))
    audio_file_data = db.Column(db.LargeBinary)
    author = db.Column(db.String(50))
    title = db.Column(db.String(50))
    desc = db.Column(db.String(255))

### Upload audiobook to db ###

@app.route("/", methods=["GET", "POST"])
@app.route("/post_audiobook", methods=["GET", "POST"])
def post_audiobook():
    if request.method == "POST":
        image_file = request.files["image_file"]
        pdf_file = request.files["pdf_file"]
        audio_file = request.files["audio_file"]
        author = request.form["author_name"]
        title = request.form["book_name"]
        desc = request.form["desc"]
        upload = Audiobooks(
            image_file_name=image_file.filename,
            image_file_data=image_file.read(),
            pdf_file_name=pdf_file.filename,
            pdf_file_data=pdf_file.read(),
            audio_file_name=audio_file.filename,
            audio_file_data=audio_file.read(),
            author=author,
            title=title,
            desc=desc
        )
        db.session.add(upload)
        db.session.commit()
        return f"uploaded: {title}"
    return render_template("upload.html")

### download audiobook from db ###


@app.route("/get_audiobook/<get_id>", methods=["GET", "POST"])
def get_audiobook(get_id):
    upload = Audiobooks.query.filter_by(id=get_id).first()
    return send_file(BytesIO(upload.audio_file_data), download_name="lission_"+upload.audio_file_name, as_attachment=True)

### download image from db ###


@app.route("/get_image/<get_id>", methods=["GET", "POST"])
def get_image(get_id):
    upload = Audiobooks.query.filter_by(id=get_id).first()
    return send_file(BytesIO(upload.image_file_data), download_name="lission_"+upload.image_file_name, as_attachment=True)

### get title from db ###


@app.route("/get_title/<get_id>", methods=["GET", "POST"])
def get_title(get_id):
    upload = Audiobooks.query.filter_by(id=get_id).first()
    return upload.title

### get desc from db ###


@app.route("/get_desc/<get_id>", methods=["GET", "POST"])
def get_desc(get_id):
    upload = Audiobooks.query.filter_by(id=get_id).first()
    return upload.desc

### get author from db ###


@app.route("/get_author/<get_id>", methods=["GET", "POST"])
def get_author(get_id):
    upload = Audiobooks.query.filter_by(id=get_id).first()
    return upload.author

### download pdf from db ###


@app.route("/get_pdf/<get_id>", methods=["GET", "POST"])
def get_pdf(get_id):
    upload = Audiobooks.query.filter_by(id=get_id).first()
    return send_file(BytesIO(upload.pdf_file_data), download_name="lission_"+upload.pdf_file_name, as_attachment=True)

### query db for certain book ###

@app.route("/searches/<int:id>", methods=["GET", "POST"])
def searches(id):
    return Response(response=json.dumps({"message": "success", "id": f"{id}", "image_file": f"/get_image/{id}","pdf_file": f"/get_pdf/{id}","audio_file": f"/get_audiobook/{id}","title":get_title(id),"author":get_author(id),"desc":get_desc(id)}), status=200, mimetype="application/json")

###return all books in db###
@app.route("/all_books", methods=["GET", "POST"])
def all_books():
    all= Audiobooks.query.all()
    list = {}
    for i in all:
        d={}
        d["title"]=i.title
        d["author"]=i.author
        d["desc"]=i.desc
        d["image_file"]=i.image_file_name
        d["pdf_file"]=i.pdf_file_name
        d["audio_file"]=i.audio_file_name
        # d={}
        # d[i]=searches(i.id)
        list[i.id]=d
    print(list)
    return Response(response=json.dumps(list), status=200, mimetype="application/json")
    # return render_template( "index.html",all=all)


### app initialization ###
if __name__ == "__main__":
    app.run(debug=True)
