<div class="modal-container" id="m5-o<?php echo $rowquery['id_pedido'];?>" role="dialog" style="--m-background: hsla(0, 0%, 0%, .4);">
  <div class="modal">
    <center> <strong style="font-size:16px">¿Estás seguro?</strong> </center><br><br>
      <div class="modal-body1">
      
          <center>       
              <br><br>
          
          <button onclick = "location.href='recib_delete.php?id=<?php echo $rowquery['id_pedido'];?>'"type="submit" class="modal__btn btnBorrar" style="color: white;background: black"data-dismiss="modal" id="<?php echo $rowquery['id_pedido']; ?>">Aceptar</button>
          </center>
          
            <a href="#m2-c" id="exit2"class="link-2"></a>
      </div>

      </div>
      
</div>