
@if ($paginator->hasPages())
<div class="col-md-12">
                              <div class="row d-flex">
                              @if ($paginator->onFirstPage())

										<div class="previous-wrapper  flex-grow-1 px-2">
							          		<button  style=" background-color:#FAB519;" disabled><i class="fas fa-arrow-left"></i>Previous</button>
							          	</div>
                                          
                                          @else

										<div class="previous-wrapper  flex-grow-1 px-2">
							          	<a href="{{ $paginator->previousPageUrl() }}"><button  style=" background-color:#FAB519;"><i class="fas fa-arrow-left"></i>Previous</button></a>
							          	</div>
                                          @endif
          
                                          @if ($paginator->hasMorePages())
                                          <div class="previous-wrapper  flex-grow-1 px-2">
							          	<a href="{{ $paginator->nextPageUrl() }}"><button  style=" background-color:#FAB519;float:right">Next<i class="fas fa-arrow-right"></i> </button></a>
							          	</div>
                                          @else
                                          <div class="next-wrapper flex-grow-1 px-2" style=" text-align: right;">
							       <button style=" background-color:#FAB519; " disabled>Next <i class="fas fa-arrow-right"></i></button></a>
							          	</div>
						          	 </div>
</div>

                                        @endif
							           
									   @endif