<!-- Modal -->
<div class="modal fade" id="select" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white "style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Printable Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <ul>

        <div class="fade-in1">
        <li>
        <button type="button" class="btn btn-secondary mb-3" onclick="showModal2()" data-bs-dismiss="modal">  Junior High School
  </button>
</li>
</div>

<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" onclick="showModal()" data-bs-dismiss="modal">
    Senior High School
  </button>
</li>
</div>

</ul>
      </div>
    </div>
  </div>
</div>

<script>
  function sselect() {
    $('#select).modal('show');
  }
</script>
