<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-02-11 02:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-02-11 02:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-02-10T20:00:00
            [end_time] => 2016-02-10T22:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-02-10 20:00:00
            [end_time] => 2016-02-10 23:00:00
        )

)

ERROR - 2016-02-11 02:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-02-11 02:00:01 --> MG start_date ===> 2016-02-10T20:00:00
ERROR - 2016-02-11 02:00:01 --> MG end_date ===> 2016-02-10T20:00:00
ERROR - 2016-02-11 02:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => e8a93b44-ef0f-471f-b200-bd75b24b00df
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-02-11 02:00:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => a6af8c05-fb14-4a73-a805-1b2fad660f17
        )

)

ERROR - 2016-02-11 02:00:07 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => a6af8c05-fb14-4a73-a805-1b2fad660f17
        )

)

ERROR - 2016-02-11 02:00:07 --> Response Code  : Normal
ERROR - 2016-02-11 02:00:07 --> cur_page
ERROR - 2016-02-11 02:00:07 --> 2
ERROR - 2016-02-11 02:00:07 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-02-11 02:00:07 --> MG Game play update result
ERROR - 2016-02-11 02:00:07 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1455102000
    [update_end_time] => 1455109200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1455123607
    [reg_date] => 1455123607
)

ERROR - 2016-02-11 05:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-02-11 05:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-02-10T23:00:00
            [end_time] => 2016-02-11T01:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-02-10 23:00:00
            [end_time] => 2016-02-11 02:00:00
        )

)

ERROR - 2016-02-11 05:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-02-11 05:00:01 --> MG start_date ===> 2016-02-10T23:00:00
ERROR - 2016-02-11 05:00:01 --> MG end_date ===> 2016-02-10T23:00:00
ERROR - 2016-02-11 05:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 24da4d88-ddc6-4066-af7c-d56d1b0fa3d5
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-02-11 05:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 5fb38745-2b62-429a-ad5f-4b0c43a8778c
        )

)

ERROR - 2016-02-11 05:00:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 5fb38745-2b62-429a-ad5f-4b0c43a8778c
        )

)

ERROR - 2016-02-11 05:00:04 --> Response Code  : Normal
ERROR - 2016-02-11 05:00:04 --> cur_page
ERROR - 2016-02-11 05:00:04 --> 2
ERROR - 2016-02-11 05:00:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-02-11 05:00:04 --> MG Game play update result
ERROR - 2016-02-11 05:00:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1455112800
    [update_end_time] => 1455120000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1455134404
    [reg_date] => 1455134404
)

ERROR - 2016-02-11 08:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-02-11 08:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-02-11T02:00:00
            [end_time] => 2016-02-11T04:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-02-11 02:00:00
            [end_time] => 2016-02-11 05:00:00
        )

)

ERROR - 2016-02-11 08:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-02-11 08:00:01 --> MG start_date ===> 2016-02-11T02:00:00
ERROR - 2016-02-11 08:00:01 --> MG end_date ===> 2016-02-11T02:00:00
ERROR - 2016-02-11 08:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => c7cee173-8350-44a3-b23e-54949ccbc3d3
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-02-11 08:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => be626786-da0b-4a48-b77e-53df40f0533e
        )

)

ERROR - 2016-02-11 08:00:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => be626786-da0b-4a48-b77e-53df40f0533e
        )

)

ERROR - 2016-02-11 08:00:03 --> Response Code  : Normal
ERROR - 2016-02-11 08:00:03 --> cur_page
ERROR - 2016-02-11 08:00:03 --> 2
ERROR - 2016-02-11 08:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-02-11 08:00:03 --> MG Game play update result
ERROR - 2016-02-11 08:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1455123600
    [update_end_time] => 1455130800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1455145203
    [reg_date] => 1455145203
)

ERROR - 2016-02-11 11:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-02-11 11:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-02-11T05:00:00
            [end_time] => 2016-02-11T07:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-02-11 05:00:00
            [end_time] => 2016-02-11 08:00:00
        )

)

ERROR - 2016-02-11 11:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-02-11 11:00:01 --> MG start_date ===> 2016-02-11T05:00:00
ERROR - 2016-02-11 11:00:01 --> MG end_date ===> 2016-02-11T05:00:00
ERROR - 2016-02-11 11:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 76b5559e-e3ed-4fdb-b34b-f316d6e6a80b
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-02-11 11:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => e2501673-4b92-4304-9df3-21366d6a7729
        )

)

ERROR - 2016-02-11 11:00:03 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => e2501673-4b92-4304-9df3-21366d6a7729
        )

)

ERROR - 2016-02-11 11:00:03 --> Response Code  : Normal
ERROR - 2016-02-11 11:00:03 --> cur_page
ERROR - 2016-02-11 11:00:03 --> 2
ERROR - 2016-02-11 11:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-02-11 11:00:03 --> MG Game play update result
ERROR - 2016-02-11 11:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1455134400
    [update_end_time] => 1455141600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1455156003
    [reg_date] => 1455156003
)

