<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="{{$id}}" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-{{$color}} text-{{$text}}">
      <i class="bi bi-bell-fill text-white me-2"></i>
      <strong class="me-auto">Notification</strong>
      <small>{{$time}}</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      {{$slot}}
    </div>
  </div>
</div>