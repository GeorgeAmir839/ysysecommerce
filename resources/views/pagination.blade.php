<style>
    .pagination li a {
        margin: 5px;
        padding: 5px;
        font-size: 20px;
        /*box-shadow: 5px 2px 5px 2px slateblue;*/
        /*background-color: slateblue;*/
    }

    .pagination li:active {
        background-color: #0c2646;
    }

</style>
@if (isset($paginator) && $paginator->lastPage() > 1)
    <ul class="pagination">
        @php
            $interval = isset($interval) ? abs(intval($interval)) : 3;
            $from = $paginator->currentPage() - $interval;
            if ($from < 1) {
                $from = 1;
            }
            
            $to = $paginator->currentPage() + $interval;
            if ($to > $paginator->lastPage()) {
                $to = $paginator->lastPage();
            }
        @endphp
        <!-- first/previous -->
        @if ($paginator->currentPage() > 1)
            <li class=" ">
                <a class="btn btn-light text-primary" href="{{ $paginator->url(1) }}" aria-label="First">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li>
                <a class="btn btn-light text-primary" href="{{ $paginator->url($paginator->currentPage() - 1) }}"
                    aria-label="Previous">
                    <span aria-hidden="true">&lsaquo;</span>
                </a>
            </li>
        @endif
        <!-- links -->
        @for ($i = $from; $i <= $to; $i++)
            @php
                $isCurrentPage = $paginator->currentPage() == $i;
            @endphp
            <li class="{{ $isCurrentPage ? 'active' : '' }}">
                <a class="btn btn-light bold" href="{{ !$isCurrentPage ? $paginator->url($i) : '#' }}">
                    {{ $i }}
                </a>
            </li>
        @endfor
        <!-- next/last -->
        @if ($paginator->currentPage() < $paginator->lastPage())
            <li>
                <a class="btn btn-light text-primary" href="{{ $paginator->url($paginator->currentPage() + 1) }}"
                    aria-label="Next">
                    <span aria-hidden="true">&rsaquo;</span>
                </a>
            </li>
            <li>
                <a class="btn btn-light text-primary" href="{{ $paginator->url($paginator->lastpage()) }}"
                    aria-label="Last">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        @endif
    </ul>
@endif
{{-- <script>
    $(document).ready(function() {

        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page) {
            $.ajax({
                url: "/pagination/fetch_data?page=" + page,
                success: function(data) {
                    $('#table_data').html(data);
                }
            });
        }

    });
</script> --}}
