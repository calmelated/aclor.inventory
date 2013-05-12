<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('ORDERDB'    , 'order');
define('INODRDB'    , 'inodr');
define('OUTODRDB'   , 'outodr');
define('ADJODRDB'   , 'adjodr');

class Order_model extends CI_Model {

    private function clear_tmepdb($db, $start, $end) {
        for($i = $start; $i <= $end ; $i = $i + 1) {
            $sql = "drop temporary table if exists `" . $db . $i . "`";
            //print $sql . '<br>';
            $this->db->query($sql);
        }
    }

    public function get_order($item_num = null, $from = null, $to = null) {
        $tempdb = rand(1000, getrandmax());
        $this->clear_tmepdb($tempdb, 1, 7);

        if ($item_num != null && $from != null && $to != null)        {  // order item_num, from ~ to
            $sql = "create temporary table `" . $tempdb . "1` engine=memory (select `item_num`, sum(`qty`) as init, max(`unit`) as unit, sum(`qty1`), max(`unit1`) as unit1 as init1 from `" . ORDERDB . "` ";
            $sql = $sql . "where `item_num` = ' " . $item_num . "' ";
            $sql = $sql . "and   `date` < ' " . $from . "' ";
            $sql = $sql . "group by `item_num`) ";
            $this->db->query($sql);

            $sql = "create temporary table `" . $tempdb . "2` engine=memory (select `item_num`, sum(`qty`) as stockin, max(`unit`) as unit, sum(`qty1`) as stockin1, max(`unit1`) as unit1 from `" . ORDERDB . "` ";
            $sql = $sql . "where `item_num`  = '" . $item_num   . "' ";
            $sql = $sql . "and   `type`  = '0'            ";
            $sql = $sql . "and   `date` >= '" . $from   . "' ";
            $sql = $sql . "and   `date` <= '" . $to     . "' ";
            $sql = $sql . "group by `item_num`)";
            $this->db->query($sql);

            $sql = "create temporary table `" . $tempdb . "3` engine=memory (select `item_num`, sum(`qty`) as stockout, max(`unit`) as unit, sum(`qty1`), max(`unit1`) as unit1 as stockout1 from `" . ORDERDB . "` ";
            $sql = $sql . "where `item_num` = '" . $item_num . "' ";
            $sql = $sql . "and   `type`  = '1'            ";
            $sql = $sql . "and   `date` >= '" . $from   . "' ";
            $sql = $sql . "and   `date` <= '" . $to     . "' ";
            $sql = $sql . "group by `item_num`)";
            $this->db->query($sql);

            $sql = "create temporary table `" . $tempdb . "4` engine=memory (select `item_num`, sum(`qty`) as stockadj, max(`unit`) as unit, sum(`qty1`) as stockadj1, max(`unit1`) as unit1 from `" . ORDERDB . "` ";
            $sql = $sql . "where `item_num` = '" . $item_num   . "' ";
            $sql = $sql . "and   `type`  = '2'            ";
            $sql = $sql . "and   `date` >= '" . $from   . "' ";
            $sql = $sql . "and   `date` <= '" . $to     . "' ";
            $sql = $sql . "group by `item_num`)";
            $this->db->query($sql);
        } else if ($item_num == null && $from != null && $to != null) {  // order from ~ to
            $sql = "create temporary table `" . $tempdb . "1` engine=memory (select `item_num`, sum(`qty`) as init, max(`unit`) as unit, sum(`qty1`) as init1, max(`unit1`) as unit1 from `" . ORDERDB . "` ";
            $sql = $sql . "where `date` < '" . $from . "' ";
            $sql = $sql . "group by `item_num`)";
            $this->db->query($sql);

            $sql = "create temporary table `" . $tempdb . "2` engine=memory (select `item_num`, sum(`qty`) as stockin, max(`unit`) as unit, sum(`qty1`) as stockin1, max(`unit1`) as unit1 from `" . ORDERDB . "` ";
            $sql = $sql . "where `type`  = '0'            ";
            $sql = $sql . "and   `date` >= '" . $from   . "' ";
            $sql = $sql . "and   `date` <= '" . $to     . "' ";
            $sql = $sql . "group by `item_num`)";
            $this->db->query($sql);

            $sql = "create temporary table `" . $tempdb . "3` engine=memory (select `item_num`, sum(`qty`) as stockout, max(`unit`) as unit, sum(`qty1`) as stockout1, max(`unit1`) as unit1 from `" . ORDERDB . "` ";
            $sql = $sql . "where `type`  = '1'            ";
            $sql = $sql . "and   `date` >= '" . $from   . "' ";
            $sql = $sql . "and   `date` <= '" . $to     . "' ";
            $sql = $sql . "group by `item_num`)";
            $this->db->query($sql);

            $sql = "create temporary table `" . $tempdb . "4` engine=memory (select `item_num`, sum(`qty`) as stockadj, max(`unit`) as unit, sum(`qty1`) as stockadj1, max(`unit1`) as unit1 from `" . ORDERDB . "` ";
            $sql = $sql . "where `type`  = '2'            ";
            $sql = $sql . "and   `date` >= '" . $from   . "' ";
            $sql = $sql . "and   `date` <= '" . $to     . "' ";
            $sql = $sql . "group by `item_num`)";
            $this->db->query($sql);
        } else if ($item_num != null && $from == null && $to == null) {  // order item_num
            $sql = "create temporary table `" . $tempdb . "1` engine=memory (select `item_num`, sum(`qty`) as init, max(`unit`) as unit, sum(`qty1`) as init1, max(`unit1`) as unit1 from `" . ORDERDB . "` ";
            $sql = $sql . "where `item_num` = '" . $item_num . "' ";
            $sql = $sql . "group by `item_num`)";
            $this->db->query($sql);

            $sql = "create temporary table `" . $tempdb . "2` engine=memory (select `item_num`, sum(`qty`) as stockin, max(`unit`) as unit, sum(`qty1`) as stockin1, max(`unit1`) as unit1 from `" . ORDERDB . "` ";
            $sql = $sql . "where `item_num` = '" . $item_num . "' ";
            $sql = $sql . "and   `type` = '0'            ";
            $sql = $sql . "group by `item_num`)";
            $this->db->query($sql);

            $sql = "create temporary table `" . $tempdb . "3` engine=memory (select `item_num`, sum(`qty`) as stockout, max(`unit`) as unit, sum(`qty1`) as stockout1, max(`unit1`) as unit1 from `" . ORDERDB . "` ";
            $sql = $sql . "where `item_num` = '" . $item_num . "' ";
            $sql = $sql . "and   `type`  = '1'            ";
            $sql = $sql . "group by `item_num`)";
            $this->db->query($sql);

            $sql = "create temporary table `" . $tempdb . "4` engine=memory (select `item_num`, sum(`qty`) as stockadj, max(`unit`) as unit, sum(`qty1`) as stockadj1, max(`unit1`) as unit1 from `" . ORDERDB . "` ";
            $sql = $sql . "where `item_num` = '" . $item_num . "' ";
            $sql = $sql . "and   `type`  = '2'            ";
            $sql = $sql . "group by `item_num`)";
            $this->db->query($sql);
        } else if ($item_num == null && $from == null && $to == null) {  // order
            $sql = "create temporary table `" . $tempdb . "1` engine=memory (select `item_num`, sum(`qty`) as init, max(`unit`) as unit, sum(`qty1`) as init1, max(`unit1`) as unit1 from `" . ORDERDB . "` ";
            $sql = $sql . "group by `item_num`)";
            $this->db->query($sql);

            $sql = "create temporary table `" . $tempdb . "2` engine=memory (select `item_num`, sum(`qty`) as stockin, max(`unit`) as unit, sum(`qty1`) as stockin1, max(`unit1`) as unit1 from `" . ORDERDB . "` ";
            $sql = $sql . "where `type` = '0' ";
            $sql = $sql . "group by `item_num`)";
            $this->db->query($sql);

            $sql = "create temporary table `" . $tempdb . "3` engine=memory (select `item_num`, sum(`qty`) as stockout, max(`unit`) as unit, sum(`qty1`) as stockout1, max(`unit1`) as unit1 from `" . ORDERDB . "` ";
            $sql = $sql . "where `type` = '1' ";
            $sql = $sql . "group by `item_num`)";
            $this->db->query($sql);

            $sql = "create temporary table `" . $tempdb . "4` engine=memory (select `item_num`, sum(`qty`) as stockadj, max(`unit`) as unit, sum(`qty1`) as stockadj1, max(`unit1`) as unit1 from `" . ORDERDB . "` ";
            $sql = $sql . "where `type` = '2' ";
            $sql = $sql . "group by `item_num`)";
            $this->db->query($sql);
        }
        $sql = "create temporary table `" . $tempdb . "5` engine=memory (select ifnull(`" . $tempdb . "2`.`item_num`, `" . $tempdb . "1`.`item_num`) as `item_num`, ifnull(`" . $tempdb . "1`.`init`,0) as `init`, ifnull(`" . $tempdb . "2`.`unit`, `" . $tempdb . "1`.`unit`) as `unit`, ifnull(`" . $tempdb . "1`.`init1`,0) as `init1`, ifnull(`" . $tempdb . "2`.`unit1`, `" . $tempdb . "1`.`unit1`) as `unit1`, ifnull(`" . $tempdb . "2`.`stockin`,0) as `stockin`, ifnull(`" . $tempdb . "2`.`stockin1`,0) as `stockin1` from `" . $tempdb . "2` left join `" . $tempdb . "1` on `" . $tempdb . "2`.`item_num` = `" . $tempdb . "1`.`item_num` );" ;
        $this->db->query($sql);

        $sql_ = "select ifnull(`" . $tempdb . "2`.`item_num`, `" . $tempdb . "1`.`item_num`) as `item_num`, ifnull(`" . $tempdb . "1`.`init`,0) as `init`, ifnull(`" . $tempdb . "2`.`unit`, `" . $tempdb . "1`.`unit`) as `unit`, ifnull(`" . $tempdb . "1`.`init1`,0) as `init1`, ifnull(`" . $tempdb . "2`.`unit1`, `" . $tempdb . "1`.`unit1`) as `unit1`, ifnull(`" . $tempdb . "2`.`stockin`,0) as `stockin`, ifnull(`" . $tempdb . "2`.`stockin1`,0) as `stockin1` from `" . $tempdb . "2` left join `" . $tempdb . "1` on `" . $tempdb . "2`.`item_num` = `" . $tempdb . "1`.`item_num`" ;
        //var_dump( $this->db->query($sql_)->result_array());

        $sql = "create temporary table `" . $tempdb . "6` engine=memory (select `" . $tempdb . "5`.* , ifnull(`" . $tempdb . "3`.`stockout`, 0) as `stockout`, ifnull(`" . $tempdb . "3`.`stockout1`, 0) as `stockout1` from `" . $tempdb . "5` left join `" . $tempdb . "3` on `" . $tempdb . "5`.`item_num` = `" . $tempdb . "3`.`item_num`);" ;
        $this->db->query($sql);

        $sql = "create temporary table `" . $tempdb . "7` engine=memory (select `" . $tempdb . "6`.* , ifnull(`" . $tempdb . "4`.`stockadj`, 0) as `stockadj`, ifnull(`" . $tempdb . "4`.`stockadj1`, 0) as `stockadj1` from `" . $tempdb . "6` left join `" . $tempdb . "4` on `" . $tempdb . "6`.`item_num` = `" . $tempdb . "4`.`item_num`);" ;
        $this->db->query($sql);

        $this->clear_tmepdb($tempdb, 1, 6);
        $sql = "select `" . $tempdb . "7`.* , (`" . $tempdb . "7`.`init` + `" . $tempdb . "7`.`stockin` - `" . $tempdb . "7`.`stockout` + `" . $tempdb . "7`.`stockadj` ) as fin, (`" . $tempdb . "7`.`init1` + `" . $tempdb . "7`.`stockin1` - `" . $tempdb . "7`.`stockout1` + `" . $tempdb . "7`.`stockadj1` ) as fin1 from `" . $tempdb . "7`";
        return $this->db->query($sql)->result_array();
    }

    public function get_inout_order($dbtable, $act, $id, $item_num, $from, $to) {
        $date_fid  = "rcv_date";
        $item_num_ = "`item_num` = '" . $item_num . "' ";;
        if($dbtable == INODRDB) {
            $date_fid  = "rcv_date";
        } else if($dbtable == OUTODRDB) {
            $date_fid  = "req_date";
            if($item_num != null) {
                $item_num_ = "`item_num` LIKE '%" . $item_num . "%' ";;
            }
        } else if($dbtable == ADJODRDB) {
            $date_fid  = "adj_date";
        }

        $sql = "select * from `" . $dbtable . "` ";
        if($id == null && $item_num == null && $from == null && $to == null) {
            //$sql = $sql . " limit 0,1000 ";
        } else {
            if($id != null) { // item_num, from ~ to are all null
                $sql = $sql . " where `id` = '" . $id . "'";
            } else { // id == null
                if($item_num == null) { // from ~ to are not null
                    $sql = $sql . " where `" . $date_fid . "` >= '" . $from . "' and `" . $date_fid . "` <= '" . $to . "'" ;
                } else if($from != null) { // item_num, from ~ to are not null
                    $sql = $sql . " where " . $item_num_ . " and `" . $date_fid . "` >= '" . $from . "' and `" . $date_fid . "` <= '" . $to . "'" ;
                } else { // item_num != null, from ~ to = null
                    $sql = $sql . " where " . $item_num_ ;
                }
            }
        }
        $sql = $sql . " order by `". $dbtable ."`.`id` desc ";
        return $this->db->query($sql)->result_array();
    }

    public function set_inodr($id) {
        if($id == null) { // new
            // update for typeahead
            $this->db->query("insert ignore into `units`     (`name`) values ('" . $this->input->post('unit')     . "'),('" . $this->input->post('unit1')  . "');");
            $this->db->query("insert ignore into `companies` (`name`) values ('" . $this->input->post('owner')    . "'),('" . $this->input->post('vendor') . "');");
            $this->db->query("insert ignore into `items`     (`name`) values ('" . $this->input->post('item_num') . "');");

            // insert record for order table
            $data = array(
                'date'      => $this->input->post('rcv_date'),
                'item_num'  => $this->input->post('item_num'),
                'type'      => 0,
                'qty'       => $this->input->post('qty'),
                'unit'      => $this->input->post('unit'),
                'qty1'      => $this->input->post('qty1'),
                'unit1'     => $this->input->post('unit1')
            );
            $this->db->insert(ORDERDB, $data);
            $odr_id = $this->db->insert_id();

            // insert the same record for the inodr table
            $data = array(
                'cid'       => $odr_id,
                'modifier'  => $this->session->userdata['user_name'],
                'rcv_date'  => $this->input->post('rcv_date'),
                'owner'     => $this->input->post('owner'),
                'vendor'    => $this->input->post('vendor'),
                'item_num'  => $this->input->post('item_num'),
                'import_num'=> $this->input->post('import_num'),
                'po_num'    => $this->input->post('po_num'),
                'qty'       => $this->input->post('qty'),
                'unit'      => $this->input->post('unit'),
                'qty1'      => $this->input->post('qty1'),
                'unit1'     => $this->input->post('unit1')
            );
            $this->db->insert(INODRDB, $data);
            $inodr_id = $this->db->insert_id();

            // insert cid for order table
            $data = array('cid' => $inodr_id);
            $this->db->where('id', $odr_id);
            $this->db->update(ORDERDB, $data);
            return $inodr_id;

        } else { // edit
            // update for typeahead
            $this->db->query("insert ignore into `units`     (`name`) values ('" . $this->input->post('unit')     . "'),('" . $this->input->post('unit1')  . "');");
            $this->db->query("insert ignore into `companies` (`name`) values ('" . $this->input->post('owner')    . "'),('" . $this->input->post('vendor') . "');");
            $this->db->query("insert ignore into `items`     (`name`) values ('" . $this->input->post('item_num') . "');");

            // update record for order table
            $data = array(
                'date'      => $this->input->post('rcv_date'),
                'item_num'  => $this->input->post('item_num'),
                'qty'       => $this->input->post('qty'),
                'unit'      => $this->input->post('unit'),
                'qty1'      => $this->input->post('qty1'),
                'unit1'     => $this->input->post('unit1')
            );
            $this->db->where('id', $this->input->post('cid'));
            $this->db->update(ORDERDB, $data);

            // update record for inodr table
            $data = array(
                'modifier'  => $this->session->userdata['user_name'],
                'rcv_date'  => $this->input->post('rcv_date'),
                'owner'     => $this->input->post('owner'),
                'vendor'    => $this->input->post('vendor'),
                'item_num'  => $this->input->post('item_num'),
                'import_num'=> $this->input->post('import_num'),
                'po_num'    => $this->input->post('po_num'),
                'qty'       => $this->input->post('qty'),
                'unit'      => $this->input->post('unit'),
                'qty1'      => $this->input->post('qty1'),
                'unit1'     => $this->input->post('unit1')
            );
            $this->db->where('id', $id);
            $this->db->update(INODRDB, $data);
        }
    }

    public function del_order($dbtable, $id) {
        // remove the record from order table
        $query = $this->db->get_where($dbtable, array('id' => $id))->result_array();
        if($dbtable != OUTODRDB) {
            $this->db->where('id', $query[0]['cid'])->delete(ORDERDB);
        } else {
            foreach(unserialize($query[0]['cid']) as $cid) {
                $this->db->where('id', $cid)->delete(ORDERDB);
            }
        }

        // remove the record from each tables
        $this->db->where('id', $id)->delete($dbtable);
        return $this->db->affected_rows();
    }

    public function set_adjodr($id) {
        if($id == null) { // new
            // update for typeahead
            $this->db->query("insert ignore into `units` (`name`) values ('" . $this->input->post('unit')     . "'),('" . $this->input->post('unit1')  . "');");
            $this->db->query("insert ignore into `items` (`name`) values ('" . $this->input->post('item_num') . "');");

            // insert record for order table
            $data = array(
                'date'      => $this->input->post('adj_date'),
                'item_num'  => $this->input->post('item_num'),
                'type'      => 2,
                'qty'       => $this->input->post('qty'),
                'unit'      => $this->input->post('unit'),
                'qty1'      => $this->input->post('qty1'),
                'unit1'     => $this->input->post('unit1')
            );
            $this->db->insert(ORDERDB, $data);
            $odr_id = $this->db->insert_id();

            // insert the same record for the adjodr table
            $data = array(
                'cid'       => $odr_id,
                'modifier'  => $this->session->userdata['user_name'],
                'adj_date'  => $this->input->post('adj_date'),
                'item_num'  => $this->input->post('item_num'),
                'qty'       => $this->input->post('qty'),
                'unit'      => $this->input->post('unit'),
                'qty1'      => $this->input->post('qty1'),
                'unit1'     => $this->input->post('unit1'),
                'reason'    => $this->input->post('reason'),
                'approved'  => $this->input->post('approved')
            );
            $this->db->insert(ADJODRDB, $data);
            $adjodr_id = $this->db->insert_id();

            // insert cid for order table
            $data = array('cid' => $adjodr_id);
            $this->db->where('id', $odr_id);
            $this->db->update(ORDERDB, $data);
            return $adjodr_id;

        } else { // edit
            // update for typeahead
            $this->db->query("insert ignore into `units` (`name`) values ('" . $this->input->post('unit')     . "'),('" . $this->input->post('unit1')  . "');");
            $this->db->query("insert ignore into `items` (`name`) values ('" . $this->input->post('item_num') . "');");

            // update record for order table
            $data = array(
                'date'      => $this->input->post('adj_date'),
                'item_num'  => $this->input->post('item_num'),
                'type'      => 2,
                'qty'       => $this->input->post('qty'),
                'unit'      => $this->input->post('unit'),
                'qty1'      => $this->input->post('qty1'),
                'unit1'     => $this->input->post('unit1')
            );
            $this->db->where('id', $this->input->post('cid'));
            $this->db->update(ORDERDB, $data);

            // update record for inodr table
            $data = array(
                'modifier'  => $this->session->userdata['user_name'],
                'adj_date'  => $this->input->post('adj_date'),
                'item_num'  => $this->input->post('item_num'),
                'qty'       => $this->input->post('qty'),
                'unit'      => $this->input->post('unit'),
                'qty1'      => $this->input->post('qty1'),
                'unit1'     => $this->input->post('unit1'),
                'reason'    => $this->input->post('reason'),
                'approved'  => $this->input->post('approved')
            );
            $this->db->where('id', $id);
            $this->db->update(ADJODRDB, $data);
        }
    }

    public function set_outodr($id) {
        $item_num = array();
        $odr_id   = array();
        $qty      = array();
        $unit     = array();
        $qty1     = array();
        $unit1    = array();

        if($id == null) { // new
            for($i = 0; $i < MAX_ITEMS; $i = $i + 1) {
                $tmp_item = $this->input->post('item_num_' . $i);
                $tmp_qty  = $this->input->post('qty_' . $i);
                if(empty($tmp_item)) {
                    continue;
                } else { // item # not empty
                    if(empty($tmp_qty)) { // no set #
                        continue;
                    }
                }

                // insert record for order table
                $data = array(
                    'date'      => $this->input->post('req_date'),
                    'item_num'  => $this->input->post('item_num_' . $i),
                    'type'      => 1,
                    'qty'       => $this->input->post('qty_'   . $i),
                    'unit'      => $this->input->post('unit_'  . $i),
                    'qty1'      => $this->input->post('qty1_'  . $i),
                    'unit1'     => $this->input->post('unit1_' . $i)
                );
                $this->db->insert(ORDERDB, $data);
                array_push($odr_id,   $this->db->insert_id());
                array_push($item_num, $this->input->post('item_num_' . $i));
                array_push($qty,      $this->input->post('qty_'   . $i));
                array_push($unit,     $this->input->post('unit_'  . $i));
                array_push($qty1,     $this->input->post('qty1_'  . $i));
                array_push($unit1,    $this->input->post('unit1_' . $i));
            }

            // insert the same record for the outodr table
            $data = array(
                'cid'           => serialize($odr_id),
                'modifier'      => $this->session->userdata['user_name'],
                'req_date'      => $this->input->post('req_date'),
                'wo_num'        => $this->input->post('wo_num'),
                'raw_num'       => $this->input->post('raw_num'),
                'fin_prod'      => $this->input->post('fin_prod'),
                'item_num'      => serialize($item_num),
                'qty'           => serialize($qty),
                'unit'          => serialize($unit),
                'qty1'          => serialize($qty1),
                'unit1'         => serialize($unit1),
                'prod_approved' => $this->input->post('prod_approved'),
                'wh_approved'   => $this->input->post('wh_approved')
            );
            $this->db->insert(OUTODRDB, $data);
            $outodr_id = $this->db->insert_id();

            // insert cid for order table
            foreach($odr_id as $oid) {
                $data = array('cid' => $outodr_id);
                $this->db->where('id', $oid);
                $this->db->update(ORDERDB, $data);
            }
            return $outodr_id;
        } else { // edit
            for($i = 0; $i < MAX_ITEMS; $i = $i + 1) {
                // check the lasttime record
                $last = $this->input->post('cid_' . $i);
                if(!empty($last)) { // still emtpy
                    $last = 1;
                } else {
                    $last = 0;
                }

                // identify the current record
                $tmp_item = $this->input->post('item_num_' . $i);
                $tmp_qty  = $this->input->post('qty_' . $i);
                $cur = 0;
                if(empty($tmp_item)) {
                    $cur = 0;
                } else { // item # not empty
                    if(!empty($tmp_qty)) { // no set #
                        $cur = 1;
                    }
                }

                // prepare record for order table
                $data = array(
                    'date'      => $this->input->post('req_date'),
                    'item_num'  => $this->input->post('item_num_' . $i),
                    'type'      => 1,
                    'cid'       => $id,
                    'qty'       => $this->input->post('qty_'   . $i),
                    'unit'      => $this->input->post('unit_'  . $i),
                    'qty1'      => $this->input->post('qty1_'  . $i),
                    'unit1'     => $this->input->post('unit1_' . $i)
                );

                if($last == 1 && $cur == 1) {        // Update
                    $this->db->where('id', $this->input->post('cid_' . $i));
                    $this->db->update(ORDERDB, $data);
                    array_push($odr_id,   $this->input->post('cid_' . $i));
                } else if($last == 1 && $cur == 0) { // Remove
                    $this->db->where('id', $this->input->post('cid_' . $i));
                    $this->db->delete(ORDERDB);
                    continue;
                } else if($last == 0 && $cur == 1) { // Add
                    $this->db->insert(ORDERDB, $data);
                    array_push($odr_id,   $this->db->insert_id());
                } else if($last == 0 && $cur == 0) { // Still Empty
                    continue;
                }

                array_push($item_num, $this->input->post('item_num_' . $i));
                array_push($qty,      $this->input->post('qty_'   . $i));
                array_push($unit,     $this->input->post('unit_'  . $i));
                array_push($qty1,     $this->input->post('qty1_'  . $i));
                array_push($unit1,    $this->input->post('unit1_' . $i));
            }

            // insert the same record for the outodr table
            $data = array(
                'cid'           => serialize($odr_id),
                'modifier'      => $this->session->userdata['user_name'],
                'req_date'      => $this->input->post('req_date'),
                'wo_num'        => $this->input->post('wo_num'),
                'raw_num'       => $this->input->post('raw_num'),
                'fin_prod'      => $this->input->post('fin_prod'),
                'item_num'      => serialize($item_num),
                'qty'           => serialize($qty),
                'unit'          => serialize($unit),
                'qty1'          => serialize($qty1),
                'unit1'         => serialize($unit1),
                'prod_approved' => $this->input->post('prod_approved'),
                'wh_approved'   => $this->input->post('wh_approved')
            );
            $this->db->where('id', $id);
            $this->db->update(OUTODRDB, $data);
        }
    }

    public function get_typeahead($table) {
        $first = true;
        $ret = "[";
        $units = $this->db->query("select * from `" . $table . "`")->result_array();
        foreach($units as $unit) {
            if($first == false) {
                $ret = $ret . ",\"" . $unit['name'] . "\"";
            } else {
                $ret = "[\"" . $unit['name'] . "\"";
                $first = false;
            }
        }
        return $ret . "]";
    }

    public function import_items($fp) {
        $handle = fopen($fp, "r");
        while (!feof($handle)) {
            $line = fgets($handle);
            $cols = explode("\t", $line);
            if(strlen($cols[0]) < 1 ||
               strlen($cols[1]) < 1 ||
               strlen($cols[2]) < 1 ||
               $cols[3] == 'YES'    ||
               $cols[3] == 'yes'    ||
               $cols[0] == 'Item'     ) {
                //print 'ignore -> <br>';
                //var_dump($cols);
                continue;
            }

            //splite RAW:123 -> type:RAW, item:123
            $cols_ = explode(':', $cols[0]);
            if(count($cols_) != 2) {
                //print 'ignore -> <br>';
                //var_dump($cols_);
                continue;
            }
            list($type, $item) = $cols_;

            // for number: "123.456" -> number:123.456
            if($cols[2][0] == '"') {
                $num = substr($cols[2], 1, strlen($cols[2])-2);
            } else {
                $num = $cols[2];
            }

            print 'Import Type: ' . $type . ', Itme: ' . $item . ', Desc: ' . $cols[1] . ', Number: ' . $num . '<br>';
            $this->db->insert("inodr", array(
                    "rcv_date" => "2013-05-01",
                    "item_num" => $item,
                    "qty"  => $num));
        }
        fclose($handle);
    }

}

/* End of file project_model.php */
/* Location: ./application/models/project_model.php */
