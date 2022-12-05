<div class="flash-message" id="flash">

  @if (session()->has('success'))
  <div class="success-msg msg">
      <div class="msg-txt">
          <iconify-icon inline icon="bi:check-circle" width="17" height="17"></iconify-icon>
          <span class>{{ session('success') }}</span>
      </div>
      <iconify-icon icon="akar-icons:circle-x" class="dismiss" onclick="closeMsg()" width="19" height="19">
      </iconify-icon>
  </div>

  @elseif (session()->has('error'))

  <div class="error-msg msg">
      <div class="msg-txt">
          <iconify-icon inline icon="bi:check-circle" width="17" height="17"></iconify-icon>
          <span class>{{ session('error') }}</span>
      </div>
      <iconify-icon icon="akar-icons:circle-x" class="dismiss" onclick="closeMsg()" width="19" height="19">
      </iconify-icon>
  </div>

  @elseif (session()->has('deleted'))

  <div class="error-msg msg">
      <div class="msg-txt">
          <iconify-icon inline icon="ic:twotone-delete-outline" width="20" height="20"></iconify-icon>
          <span class>{{ session('deleted') }}</span>
      </div>
      <iconify-icon icon="akar-icons:circle-x" class="dismiss" onclick="closeMsg()" width="19" height="19">
      </iconify-icon>
  </div>

  @endif
  
</div>

<script type="text/javascript">
    function closeMsg() {
        document.getElementById("flash").style.display = "none";
    }
</script>