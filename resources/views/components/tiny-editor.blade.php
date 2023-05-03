
@props(['disabled' => false])

  <textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control wyedit']) !!}></textarea>
  <script  type="module">
      tinymce.init({
          selector: 'textarea.wyedit', // change this value according to your HTML
          menubar:false,
          branding: false,
          promotion:false
      });
  </script>

