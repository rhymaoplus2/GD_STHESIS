
<div class="table">
  <div class="row">
    <div class="cell header">Header 1</div>
    <div class="cell">Row 1, Column 1</div>
    <div class="cell">Row 2, Column 1</div>
    <div class="cell">Row 3, Column 1</div>
  </div>
  <div class="row">
    <div class="cell header">Header 2</div>
    <div class="cell">Row 1, Column 2</div>
    <div class="cell">Row 2, Column 2</div>
    <div class="cell">Row 3, Column 2</div>
  </div>
  <div class="row">
    <div class="cell header">Header 3</div>
    <div class="cell">Row 1, Column 3</div>
    <div class="cell">Row 2, Column 3</div>
    <div class="cell">Row 3, Column 3</div>
  </div>
</div>

<style>
.table {
  display: flex;
}

.row {
  display: flex;
  flex-direction: column;
  width: 100px;
  margin-right: 20px;
}

.cell {
  width: 100%;
  height: 100px;
  border: 1px solid black;
  padding: 5px;
  text-align: center;
  transform: rotate(-90deg);
  transform-origin: center;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.cell.header {
  font-weight: bold;
}


</style>
