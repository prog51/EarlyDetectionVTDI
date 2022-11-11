@extends('layout')
@section('title','Report')


@section('content')

            <div class="d-flex justify-content-center">
                
               <div>
                <h1 class="test-results-header text-dark" style="display:block;">
                        Test Report
                    </h1>
                </div>
                <br/><br/><br/><br/>
                    <table class="test-result-table text-dark" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="test-result-table-header-cell text-dark">
                                    Test Case
                                </td>
                                <td class="test-result-table-header-cell text-dark">
                                    Description
                                </td>
                                <td class="test-result-table-header-cell text-dark">
                                    Result
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="test-result-step-row test-result-step-row-altone text-dark">
                                <td class="test-result-step-command-cell text-dark">
                                    open /
                                </td>
                                <td class="test-result-step-description-cell text-dark">
                                    Open browser to "/"
                                </td>
                                <td class="test-result-step-result-cell-ok text-dark">
                                    OK
                                </td>
                            </tr>
                            <tr class="test-result-step-row test-result-comment-row text-dark">
                                <td class="test-result-describe-cell" colspan="3">
                                    Describe: This is a comment
                                </td>
                            </tr>
                            <tr class="test-result-step-row test-result-step-row-alttwo text-dark">
                                <td class="test-result-step-command-cell">
                                    click btnG
                                </td>
                                <td class="test-result-step-description-cell text-dark">
                                    Click on page element with identifier of "btnG"
                                </td>
                                <td class="test-result-step-result-cell-failure text-dark">
                                    FAILURE - Unable to find element named "btnG"
                                </td>
                            </tr>
                            <tr class="test-result-step-row test-result-step-row-altone text-dark">
                                <td class="test-result-step-command-cell">
                                    assertTitle something
                                </td>
                                <td class="test-result-step-description-cell text-dark">
                                    Test that the title of the page is "something"
                                </td>
                                <td class="test-result-step-result-cell-notperformed text-dark">
                                    NOT PERFORMED
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>

@endsection