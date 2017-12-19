<div class="row">
  <div class="col-md-12" style="text-align:center;">
    <h1>Buat Assignment</h1>
  </div>
</div>

<div class="row">
    <div class="col-md-2"></div>
  <div class="col-md-8">
  <form class="form-horizontal">
    <div class="form-group">
      <label for="course-name" class="col-sm-2 control-label">Course</label>
      <div class="col-sm-10">
      <select class="form-control" id="course-name">
        <option>Data Mining</option>
        <option>Computer Vision</option>
        <option>Human and Computer Interaction</option>
      </select>
      </div>
    </div>
    <div class="form-group">
      <label for="sylabus" class="col-sm-2 control-label">Silabus</label>
      <div class="col-sm-10">
      <select class="form-control" id="sylabus">
        <option>Minggu 1</option>
        <option>Minggu 2</option>
        <option selected>Minggu 3</option>
      </select>
      </div>
    </div>

    <div class="form-group">
      <label for="description" class="col-sm-2 control-label">Deskripsi tugas</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="description" placeholder="Deskripsi tugas">
      </div>
    </div>

    <div class="form-group">
      <label for="material-support" class="col-sm-2 control-label">Bahan Pendukung</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="material-support" placeholder="Tambahkan file atau bahan pendukung tugas">
      </div>
    </div>

    <div class="form-group">
      <label for="due-date" class="col-sm-2 control-label">Deadline</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="due-date" placeholder="deadline tugas">
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10" style="text-align:right">
        <button type="submit" class="btn btn-success" style="padding: 10px 30px;margin-top:100px">Buat</button>
      </div>
    </div>
  </form>
  </div>
  <div class="col-md-2"></div>
</div>