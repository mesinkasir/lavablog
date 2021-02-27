<footer class="bg-white sticky-footer">
    <div class="container my-auto">
        <div class="my-auto text-center copyright">
            <span>Copyright &copy; by <a href="https://axcora.com" target="_blank" class="text-danger">Axcora technology</a></span>
        </div>
    </div>
</footer>
</div>
</div>
<a class="rounded scroll-to-top" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Where you going my man ???</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">We Missing you, back again and be artisan.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="{{ route('logout') }}">Log Out</a>
            </div>
        </div>
    </div>
</div>
@include('admin.layouts.script')