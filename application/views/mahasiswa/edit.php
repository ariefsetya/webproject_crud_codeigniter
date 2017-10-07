<form method="POST" action="<?php echo base_url('mahasiswa/update');?>">
  <input type="hidden" name="id" value="<?php echo $mahasiswa->id;?>">
  <div class="form-group">
    <label>NPM</label>
    <input type="text" class="form-control" name="npm" value="<?php echo $mahasiswa->npm;?>" placeholder="Ex: 201543501010">
  </div>
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $mahasiswa->nama;?>" placeholder="Ex: Seno Willbert">
  </div>
  <div class="form-group">
    <label>Kelas</label>
    <input type="text" class="form-control" name="kelas" value="<?php echo $mahasiswa->kelas;?>" placeholder="Ex: X0H">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>