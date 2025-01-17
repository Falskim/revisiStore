@extends('layouts.admin')

@section('title')
    Administrator Dashboard
@endsection

@section('content')
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Admin Dashboard</h2>
                <p class="dashboard-subtitle">
                  This is Sotore Administrator Panel
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Customer
                        </div>
                        <div class="dashboard-card-subtitle">
                          {{ $customer }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Revenue
                        </div>
                        <div class="dashboard-card-subtitle">
                          Rp.{{ $revenue }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Transaction
                        </div>
                        <div class="dashboard-card-subtitle">
                          {{ $transaction }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-12 mt-2">
                    <h5 class="mb-3">Recent Transactions</h5>
                    @foreach ($transaction_data as $transaction)
                    <a class="card card-list d-block"
                      href="{{ route('dashboard-transaction-details', $transaction->id) }}">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="{{ Storage::url($transaction->product->galleries->first()->photos ?? '') }}"
                              class="w-75"
                            />
                          </div>
                          <div class="col-md-4">
                            {{ $transaction->product->name ?? '' }}
                          </div>
                          <div class="col-md-3">
                            {{ $transaction->transaction->user->name ?? '' }}
                          </div>
                          <div class="col-md-3">
                            {{ $transaction->created_at ?? '' }}
                          </div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard-arrow-right.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection