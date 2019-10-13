<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            
            {{-- <form class="form-horizontal"> --}}
                {!! Form::open(['route' => 'candidates.store','class' => 'form-horizontal']) !!}
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('name',null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('mobile1', 'Mobile Number', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::phoneNumber() !!}
                            </div>
                        </div>
                    </div>
                    
              <!-- /.box-body -->
            </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            {!! Form::close() !!}
</div>