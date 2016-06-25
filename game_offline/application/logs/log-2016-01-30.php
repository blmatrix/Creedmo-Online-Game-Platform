<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-01-30 02:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-30 02:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-29T20:00:00
            [end_time] => 2016-01-29T22:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-29 20:00:00
            [end_time] => 2016-01-29 23:00:00
        )

)

ERROR - 2016-01-30 02:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-30 02:00:01 --> MG start_date ===> 2016-01-29T20:00:00
ERROR - 2016-01-30 02:00:01 --> MG end_date ===> 2016-01-29T20:00:00
ERROR - 2016-01-30 02:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => a84d04f6-fbc8-499f-a83c-41054b95f405
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-30 02:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 98d9511d-5c18-4d96-855f-1ba23360894c
        )

)

ERROR - 2016-01-30 02:00:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 98d9511d-5c18-4d96-855f-1ba23360894c
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-30 02:00:04 --> Response Code  : NotInCache
ERROR - 2016-01-30 02:00:06 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 607957be-6ecb-45a9-bb32-3b828a1bc911
        )

)

ERROR - 2016-01-30 02:00:08 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 607957be-6ecb-45a9-bb32-3b828a1bc911
        )

)

ERROR - 2016-01-30 02:00:08 --> Response Code  : Normal
ERROR - 2016-01-30 02:00:08 --> cur_page
ERROR - 2016-01-30 02:00:08 --> 2
ERROR - 2016-01-30 02:00:08 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-30 02:00:08 --> MG Game play update result
ERROR - 2016-01-30 02:00:08 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1454065200
    [update_end_time] => 1454072400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1454086808
    [reg_date] => 1454086808
)

ERROR - 2016-01-30 05:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-30 05:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-29T23:00:00
            [end_time] => 2016-01-30T01:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-29 23:00:00
            [end_time] => 2016-01-30 02:00:00
        )

)

ERROR - 2016-01-30 05:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-30 05:00:01 --> MG start_date ===> 2016-01-29T23:00:00
ERROR - 2016-01-30 05:00:01 --> MG end_date ===> 2016-01-29T23:00:00
ERROR - 2016-01-30 05:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => ef9a5e4e-407f-4fe2-aae3-d8631327433c
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-30 05:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 633a64b6-407d-49ad-9ff5-2330efb3f82f
        )

)

ERROR - 2016-01-30 05:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 633a64b6-407d-49ad-9ff5-2330efb3f82f
        )

)

ERROR - 2016-01-30 05:00:03 --> Response Code  : Normal
ERROR - 2016-01-30 05:00:03 --> cur_page
ERROR - 2016-01-30 05:00:03 --> 2
ERROR - 2016-01-30 05:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-30 05:00:03 --> MG Game play update result
ERROR - 2016-01-30 05:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1454076000
    [update_end_time] => 1454083200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1454097603
    [reg_date] => 1454097603
)

ERROR - 2016-01-30 08:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-30 08:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-30T02:00:00
            [end_time] => 2016-01-30T04:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-30 02:00:00
            [end_time] => 2016-01-30 05:00:00
        )

)

ERROR - 2016-01-30 08:00:02 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-30 08:00:02 --> MG start_date ===> 2016-01-30T02:00:00
ERROR - 2016-01-30 08:00:02 --> MG end_date ===> 2016-01-30T02:00:00
ERROR - 2016-01-30 08:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 94a7bf89-269f-47bb-9cf8-6dfe85706f41
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-30 08:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 571efb1d-9479-44a4-8887-7befe7c21806
        )

)

ERROR - 2016-01-30 08:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 571efb1d-9479-44a4-8887-7befe7c21806
        )

)

ERROR - 2016-01-30 08:00:05 --> Response Code  : Normal
ERROR - 2016-01-30 08:00:05 --> cur_page
ERROR - 2016-01-30 08:00:05 --> 2
ERROR - 2016-01-30 08:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-30 08:00:05 --> MG Game play update result
ERROR - 2016-01-30 08:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1454086800
    [update_end_time] => 1454094000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1454108405
    [reg_date] => 1454108405
)

ERROR - 2016-01-30 11:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-30 11:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-30T05:00:00
            [end_time] => 2016-01-30T07:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-30 05:00:00
            [end_time] => 2016-01-30 08:00:00
        )

)

ERROR - 2016-01-30 11:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-30 11:00:01 --> MG start_date ===> 2016-01-30T05:00:00
ERROR - 2016-01-30 11:00:01 --> MG end_date ===> 2016-01-30T05:00:00
ERROR - 2016-01-30 11:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => e849cb20-5863-4090-9831-48834c67827d
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-30 11:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 3ab3f479-e3a1-4a73-892b-900712a5cec5
        )

)

ERROR - 2016-01-30 11:00:02 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 3ab3f479-e3a1-4a73-892b-900712a5cec5
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-30 11:00:02 --> Response Code  : NotInCache
ERROR - 2016-01-30 11:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 975693fe-f413-4c8b-aa63-39f1e0c642d5
        )

)

ERROR - 2016-01-30 11:00:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 975693fe-f413-4c8b-aa63-39f1e0c642d5
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-30 11:00:04 --> Response Code  : NotInCache
ERROR - 2016-01-30 11:00:06 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 0b62dada-e8fe-48a7-aec3-06155b894375
        )

)

ERROR - 2016-01-30 11:00:08 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 0b62dada-e8fe-48a7-aec3-06155b894375
        )

)

ERROR - 2016-01-30 11:00:08 --> Response Code  : Normal
ERROR - 2016-01-30 11:00:08 --> cur_page
ERROR - 2016-01-30 11:00:08 --> 2
ERROR - 2016-01-30 11:00:08 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-30 11:00:08 --> MG Game play update result
ERROR - 2016-01-30 11:00:08 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1454097600
    [update_end_time] => 1454104800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1454119208
    [reg_date] => 1454119208
)

ERROR - 2016-01-30 14:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-30 14:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-30T08:00:00
            [end_time] => 2016-01-30T10:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-30 08:00:00
            [end_time] => 2016-01-30 11:00:00
        )

)

ERROR - 2016-01-30 14:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-30 14:00:01 --> MG start_date ===> 2016-01-30T08:00:00
ERROR - 2016-01-30 14:00:01 --> MG end_date ===> 2016-01-30T08:00:00
ERROR - 2016-01-30 14:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => c98266b6-675d-4c23-b4e6-c34a7cb81d6c
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-30 14:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => bc36f6ce-7c2a-4c97-aa38-c3ca06893d07
        )

)

ERROR - 2016-01-30 14:00:04 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => bc36f6ce-7c2a-4c97-aa38-c3ca06893d07
        )

)

ERROR - 2016-01-30 14:00:04 --> Response Code  : Normal
ERROR - 2016-01-30 14:00:04 --> cur_page
ERROR - 2016-01-30 14:00:04 --> 2
ERROR - 2016-01-30 14:00:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-30 14:00:04 --> MG Game play update result
ERROR - 2016-01-30 14:00:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1454108400
    [update_end_time] => 1454115600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1454130004
    [reg_date] => 1454130004
)

ERROR - 2016-01-30 17:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-30 17:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-30T11:00:00
            [end_time] => 2016-01-30T13:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-30 11:00:00
            [end_time] => 2016-01-30 14:00:00
        )

)

ERROR - 2016-01-30 17:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-30 17:00:01 --> MG start_date ===> 2016-01-30T11:00:00
ERROR - 2016-01-30 17:00:01 --> MG end_date ===> 2016-01-30T11:00:00
ERROR - 2016-01-30 17:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 7010a1a7-3351-423d-803e-0c837d404f90
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-30 17:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => b3895862-a8d5-401a-b48d-21fa0777e6d0
        )

)

ERROR - 2016-01-30 17:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => b3895862-a8d5-401a-b48d-21fa0777e6d0
        )

)

ERROR - 2016-01-30 17:00:03 --> Response Code  : Normal
ERROR - 2016-01-30 17:00:03 --> cur_page
ERROR - 2016-01-30 17:00:03 --> 2
ERROR - 2016-01-30 17:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-30 17:00:03 --> MG Game play update result
ERROR - 2016-01-30 17:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1454119200
    [update_end_time] => 1454126400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1454140803
    [reg_date] => 1454140803
)

ERROR - 2016-01-30 20:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-30 20:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-30T14:00:00
            [end_time] => 2016-01-30T16:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-30 14:00:00
            [end_time] => 2016-01-30 17:00:00
        )

)

ERROR - 2016-01-30 20:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-30 20:00:01 --> MG start_date ===> 2016-01-30T14:00:00
ERROR - 2016-01-30 20:00:01 --> MG end_date ===> 2016-01-30T14:00:00
ERROR - 2016-01-30 20:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => afe8ef73-4535-422e-aba0-7d1383ab44dc
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-30 20:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => c9da1e5c-6d90-477e-8367-4a815297dc04
        )

)

ERROR - 2016-01-30 20:00:02 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => c9da1e5c-6d90-477e-8367-4a815297dc04
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-30 20:00:02 --> Response Code  : NotInCache
ERROR - 2016-01-30 20:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => c0558f7e-0ad2-41b4-8e52-1c5044f909f5
        )

)

ERROR - 2016-01-30 20:00:04 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => c0558f7e-0ad2-41b4-8e52-1c5044f909f5
        )

)

ERROR - 2016-01-30 20:00:04 --> Response Code  : Normal
ERROR - 2016-01-30 20:00:04 --> cur_page
ERROR - 2016-01-30 20:00:04 --> 2
ERROR - 2016-01-30 20:00:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-30 20:00:04 --> MG Game play update result
ERROR - 2016-01-30 20:00:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1454130000
    [update_end_time] => 1454137200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1454151604
    [reg_date] => 1454151604
)

ERROR - 2016-01-30 23:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-30 23:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-30T17:00:00
            [end_time] => 2016-01-30T19:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-30 17:00:00
            [end_time] => 2016-01-30 20:00:00
        )

)

ERROR - 2016-01-30 23:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-30 23:00:01 --> MG start_date ===> 2016-01-30T17:00:00
ERROR - 2016-01-30 23:00:01 --> MG end_date ===> 2016-01-30T17:00:00
ERROR - 2016-01-30 23:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 8cf071e3-3256-4db5-b1e4-917e2e18834b
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-30 23:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 1161c01e-d1a2-4baf-b67b-4cb6b0c645cc
        )

)

ERROR - 2016-01-30 23:00:04 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 1161c01e-d1a2-4baf-b67b-4cb6b0c645cc
        )

)

ERROR - 2016-01-30 23:00:04 --> Response Code  : Normal
ERROR - 2016-01-30 23:00:04 --> cur_page
ERROR - 2016-01-30 23:00:04 --> 2
ERROR - 2016-01-30 23:00:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-30 23:00:04 --> MG Game play update result
ERROR - 2016-01-30 23:00:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1454140800
    [update_end_time] => 1454148000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1454162404
    [reg_date] => 1454162404
)

