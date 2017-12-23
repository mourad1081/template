var POST = 'POST',
    GET = 'GET',
    PUT = 'PUT';

var sendTo = function (route, method, params, success, error) {
    $.ajax({
        url: URL + '/' + route,
        method: method,
        data: params,
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        success: success,
        error: error
    });
}
