<section class="pengaturan mt-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Guru</h3>
          </div>
          <div class="card-body">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item align-content-lg-end" aria-current="page">
                  <a class="btn btn-success" href="<?= base_url()."guru/form/tambah/" ?>" >TAMBAH</a>
                </li>
              </ol>
            </nav>
            <div class="table-responsive">
              <table id="tabel-guru" class="table table-sm table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Jabatan</th>
                    <th>Operasi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i = 1;
                  foreach($guru as $key => $data): 
                  ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?= $data['nip'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['nama_jabatan'] ?></td>
                    <td>
                      <a class="btn btn-info" href="<?= base_url()."guru/form/update?id=".$data['nip'] ?>" >UPDATE</a>
                      <a class="btn btn-danger" href="<?= base_url()."guru/delete/".$data['nip'] ?>" >DELETE</a>
                    </td>
                  </tr>
                  <?php 
                    $i++;
                  endforeach; 
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="card-content">
        <div class="table-container">
          <table class="table is-fullwidth is-striped is-hoverable is-sortable is-fullwidth">
            <thead>
            <tr>
              <th>No</th>
              <th>NIP</th>
              <th>Nama Guru</th>
              <th>Jabatan</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <?php 
                  $i = 1;
                foreach($guru as $key => $data): 
                ?>
              <td><?= $i ?></td>
              </td>
              <!-- <td class="">
                <div class="image">
                  <img src="https://avatars.dicebear.com/v2/initials/juliet-muller.svg" class="is-rounded">
                </div>
              </td> -->
              <td><?= $data['nip'] ?></td>
              <td><?= $data['nama'] ?></td>
              <td><?= $data['nama_jabatan']?></td>
              <td>
                <div class="buttons is-right">
                  <a class="button is-small is-primary" type="button" href="<?= base_url()."guru/form/update?id=".$data['nip'] ?>" >
                    <span class="icon"><i class="mdi mdi-eye"></i></span>
                  </a>
                  <a class="button is-small is-danger jb-modal" data-target="sample-modal" type="button" href="<?= base_url()."guru/delete/".$data['nip'] ?>">
                    <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                  </a>
                </div>
              </td>
            </tr>
            <?php 
              $i++;
            endforeach; 
            ?>
            </tr>
            </tbody>
          </table>
        </div>
      </div>